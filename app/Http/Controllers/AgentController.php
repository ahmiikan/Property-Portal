<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\AgentDealingCity;
use App\Models\AgentDocument;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\User;

use Spatie\Permission\Models\Role;
use DB;

class AgentController extends Controller
{


    function __construct()
    {
        $this->middleware('permission:approve-agent|disapprove-agent|review-agent', ['only' => ['index','store']]);
        //  $this->middleware('permission:approve-agent', ['only' => ['approve','store']]);
        //  $this->middleware('permission:disapprove-agent', ['only' => ['reject','store']]);
        //  $this->middleware('permission:review-agent', ['only' => ['index','doc','store']]);

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $agents = Agent::where('status','in-review')->orderBy('id','DESC')->paginate(5);
        // $agents = Agent::where('status','in-review')->first();
        //  dd($agents->first());
        return view('agentsforReview',compact('agents'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('UploadDocAgent');
    }
    public function blockedAgent(Request $request)
    {
        $data = Agent::where('status','rejected')->orderBy('id','DESC')->paginate(5);
        // return $data;
        return view('blockedAgent',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }  
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // return Auth()->user()->agent->id;
        $request->validate([

        'doc' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        $userImage = time().'.'.$request->file('doc')->getClientOriginalExtension();

        $doc=AgentDocument::create(
            [

            'agent_id'=>Auth()->user()->agent->id,
            'documents'=>$userImage,
            ]
            );
            $agent=Auth()->user()->agent;
            $agent->status='in-review';
            $agent->save();
        $request->file('doc')->move(public_path('docs'), $userImage);

        return redirect()->back()->with('success','Documents Upload SuccessFully An Admin Will review and Update your Account Status In 24H');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = agent::find($id);
        return view('UserManagement.show',compact('agent'));
        
    } 

     public function doc($id)
    {
        $agent = Agent::where('id',$id)->first();
        //  dd($agents->doc->last()->documents );

        return view('verifyDocs',compact('agent'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $agent=User::findOrFail($id);
        // if ($agent->roles->pluck('name')->first()=='Admin'){
        //     return redirect()->route('agent.index')->with('success','Admin can not be deleted');
        // }
        // $agent->forceDelete();
        // return redirect()->route('agent.index')
        //                 ->with('success','agent deleted successfully');
    }
    
    public function approve($id)
    {
        //
        $agent = Agent::where('id',$id)->first();
        $agent->status='verified';
        $agent->reviewed_by=auth()->id();
        $agent->save();
        return redirect()->route('agent.index')->with('success','Approved Successfully');

    }


    public function reject(Request $request,$id)
    {
        //

        $this->validate($request, ['reason' => 'required|string|max:255']);
        $agent = Agent::where('id',$id)->first();
        $agent->status='rejected';
        $agent->review_comment= $request->reason;
        $agent->reviewed_by=auth()->id();
        $agent->save();
        return redirect()->route('agent.index')->with('success','Rejected Successfully');
    }

    public function agentListView(Request $request)
    {
        //
         
       

        $agents = Agent::where('status','verified')->orderBy('id','DESC')->paginate(5);
        return view('agentsListView',compact('agents'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }




    public function registerForm(){

        $cities = City::where('country_id', 162)->get(["name", "id"]);
// return "hi";
        return view('becomeAgent' , compact('cities'));

    }



    public function registerAgent(Request $request)
    {
        //
        $request->validate([
            'agencyName' => 'required|string|max:255',
            'Address' => 'required|string|max:255',
            'Number' => 'required|string|max:13',
            'AgencyEmail' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'agent_cities'=> 'required',
        ]);
        $user=auth()->user();
        $logo = time().'.'.$request->file('logo')->getClientOriginalExtension();
        $request->file('logo')->move(public_path('logo'), $logo);
        $agent = Agent::create([
            'user_id' => $user->id,
            'name' => $request->agencyName,
            'address' => $request->Address,
            'email' => $request->AgencyEmail,
            'cell' => $request->Number,
            'logo' => $logo,
        ]);

        $id=auth()->id();
        $userRole = Role::where('name', 'User')->first()->id;
        $agentRole = Role::where('name', 'Agent')->first()->id;
        $user = User::find($id);
        $user->assignRole([$agentRole]);
        DB::table('model_has_roles')->where('model_id',$id)->where('role_id',$userRole)->delete();
        if (isset($agent)) {
            $agent_id = $agent->id;
            for ($i = 0; $i < count($request->agent_cities); $i++) {
                $AgentDealingCity = AgentDealingCity::create([
                    'agent_id' => $agent_id,
                    'city_id' => $request->agent_cities[$i],

                ]);}
        }
          $user = auth()->id();

        return redirect()->route('personalinfo',$user)->with('success','registered as an agent Successfully');
    }



}

<?php
    
namespace App\Http\Controllers\UserManagement;    

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
    
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('UserManagement.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 20);
    }

    public function findBySearchKeyAll(Request $request)
    {
        $request->validate(['searchTerm'=>'required|string']);
        $searchTerm=$request->searchTerm;
        // return $searchTerm;
        $data=User::where('name', 'LIKE', "%{$searchTerm}%") 
                    ->orWhere('email', 'LIKE', "%{$searchTerm}%")
                    ->where('user_status','active')
                    ->orderBy('id','DESC')->paginate(5);
        // $data = User::orderBy('id','DESC')->paginate(5);
        return view('UserManagement.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 20);
    }


    public function blocked(Request $request)
    {
        $data = User::role('user')->where('user_status','blocked')->orderBy('id','DESC')->paginate(5);
        return view('UserManagement.blocked',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }  
    
    public function deleted(Request $request)
    {
        $data = User::onlyTrashed()->orderBy('id','DESC')->paginate(5);
        return view('deletedAccount',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function profileview(Request $request,$id)
    {
        $data = User::where('user_status','blocked')->orderBy('id','DESC')->paginate(5);
        return view('UserManagement.blocked',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('UserManagement.create',compact('roles'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $user->assignRole($request->input('roles'));
    
        // return redirect()->route('users.index')
        //                 ->with('success','User created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $isUser=true;
     
        if($id==auth()->id()){
            $isUser=false;
        }
        $user = User::find($id);
        return view('UserManagement.show',compact('user','isUser'));
       
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        // return view('users.edit',compact('user','roles','userRole'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $user=User::findOrFail($id);
        // return $id;
        if ($user->roles->pluck('name')->first()=='Admin'){
            return redirect()->route('users.index')->with('success','Admin can not be deleted');
        }
        $user->forceDelete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
    public function restore($id)
    {
        User::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back()->with('success','User restored successfully');
    }
    public function delete($id)

    { 
        $user = User::findOrFail($id);
        if ($user->roles->pluck('name')->first()=='Admin'){
            return redirect()->route('users.index')->with('success','Admin can not be deleted');
        }
        $user->delete();
        $user->deleted_by = Auth()->user()->id;
        $user->save();
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }
    public function block(Request $request,$id)

    { 
        $user = User::findOrFail($id);
        $user->user_status='blocked';
        $user->reason= $request->reason;
        $user->updated_by = Auth()->user()->id;
        $user->save();
        return redirect()->route('users.blocked')->with('success','User Blocked Successfully');
    }
    
    public function unblock(Request $request,$id)

    { 
        $user = User::findOrFail($id);
        $user->user_status='active';
        $user->reason= $request->reason;
        $user->updated_by = Auth()->user()->id;
        $user->save();
        return redirect()->back()->with('success','User UnBlocked Successfully');
    }
    
}
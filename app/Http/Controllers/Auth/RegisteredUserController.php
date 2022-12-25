<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\AgentDealingCity;
use App\Models\City;
use App\Models\Country;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule; 
use Illuminate\Validation\Rules;

use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $data['countries'] = Country::get(["name", "id"]);
        $data['cities'] = City::where('country_id', 162)->get(["name", "id"]);
        return view('auth.register', $data);

    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("country_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cell_no' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'city_id' => ['required'],
            'country_id' => ['required'],
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'agencyName' => [Rule::requiredIf($request->SignupAs == 2)],
            'Address' => [Rule::requiredIf($request->SignupAs == 2)],
            'Number' => [Rule::requiredIf($request->SignupAs == 2)],
            'AgencyEmail' => [Rule::requiredIf($request->SignupAs == 2)],
            'logo' => [Rule::requiredIf($request->SignupAs == 2), 'mimes:jpeg,jpg,png', 'max:5120'],
            'SignupAs' => ['required', Rule::in(['1', '2'])],

        ]);
        $userImage = time() . '.' . $request->file('image')->getClientOriginalExtension();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cell_no' => $request->cell_no,
            'password' => Hash::make($request->password),
            'city_id' => $request->city_id,
            'country_id' => $request->country_id,
            'image' => $userImage,
        ]);
        $request->file('image')->move(public_path('images'), $userImage);

        if ($user) {
            $user->created_by = $user->id;
            $user->save();
        }

        if ($request->SignupAs == 2) {
            $imageName = time() . '.' . $request->file('logo')->getClientOriginalExtension();
            $agent = Agent::create([
                'user_id' => $user->id,
                'name' => $request->agencyName,
                'address' => $request->Address,
                'email' => $request->AgencyEmail,
                'cell' => $request->Number,
                'logo' => $imageName,
            ]);

            $request->file('logo')->move(public_path('images'), $imageName);

            $agentRole = Role::where('name', 'Agent')->first()->id;
            $user->assignRole([$agentRole]);

        } else {

            $userRole = Role::where('name', 'User')->first()->id;
            $user->assignRole([$userRole]);

        };
        if (isset($agent)) {
            $agent_id = $agent->id;
            for ($i = 0; $i < count($request->agent_cities); $i++) {
                $AgentDealingCity = AgentDealingCity::create([
                    'agent_id' => $agent_id,
                    'city_id' => $request->agent_cities[$i],

                ]);}
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function edit(User $user)
    {
        return view('personalinfo',compact('user'));
        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyListing  $propertyListing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $user=User::findOrFail($id);
        $user->cell_no = $request->cell_no;
        $user->city = $request->city_id;

        
        $user->save();

        return redirect()->back()->with('success', 'Property Updated Successfully');
    }
}

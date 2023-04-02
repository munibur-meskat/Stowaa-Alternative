<?php

namespace App\Http\Controllers\Backend\UserProfile;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserProfile::all();
        return view('backend-app.user-profile.index',compact('users'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend-app.user-profile.create');
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
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $id = auth()->user()->id;
         
         $users = User::with('user_profiles')->where('id',$id)->get(['id','name','email']);
        // return $user;
        // exit();
      
        return view('backend-app.user-profile.edit',compact('users'));
         
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
         
        $profile_image = $request->file('image');
        $user_profile = UserProfile::where('user_id',$id)->get('image');
        foreach($user_profile as $profile){
        $image_name  = $profile->image;  
        }
  
        if($profile_image){
            $image_name = Str::lower($request->name . time().".". $profile_image->getClientOriginalExtension());
        }
         
        // return $image_name;
        // exit();
         
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $userProfile = UserProfile::find($id);

        if($profile_image){
            $profile_image->move(public_path('/storage/profile-upload'), $image_name);
        }
        $userProfile = UserProfile::updateOrCreate(
            [
            'user_id' => Auth::user()->id,
            ],
          
            [
            'phone' => $request->get('phone'),
            'image'=> $image_name,
            'country'=> $request->country,
            ],
        );
        return redirect()->route('dashboard.role-assign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

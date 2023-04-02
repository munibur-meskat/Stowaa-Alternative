<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend-app.dashboard.index');
    }

    public function backend(){
        $id = auth()->user()->id;
        $user_profile = UserProfile::where('id',$id)->get('image');
        return view('backend-app.dashboard.index',compact('user_profile'));
    }
}

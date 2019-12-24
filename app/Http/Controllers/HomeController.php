<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\Location;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function onboard()
    {
        return view('onboard');
    }

    public function onboard_submit(Request $request)
    {
        $user = Auth::user()->id;
        $profile = new Profile;
        $profile->phonenumber = $request->phonenumber;
        $profile->gender = $request->gender;
        $profile->occupation = $request->occupation;
        $profile->user_id = $user;
        $profile->save();

        $location = new Location;
        $location->name = $request->name;
        $location->houseNumber = $request->houseNumber;
        $location->street = $request->street;
        $location->save();
        
        session()->flash('message', 'Hello'.' '.$user->firstname);
        return redirect()->route('onboard');
    }

    
}

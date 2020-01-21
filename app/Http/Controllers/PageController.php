<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\RestaurantType;
use App\Services\Slug;
use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use App\UserType;
use App\Restaurant;
use App\Profile;
use App\User;
use App\Rider;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function about_us()
    {
        return view('about');
    }

    public function index()
    {
        $page_title = 'Welcome To HofExpress';
        $restaurants = Restaurant::where('verified','yes')->take(4)->get();
        return view('welcome',compact('restaurants','page_title'));
    }

    public function register_restaurant(){
        $page_title = 'Submit Your Restaurant';
        $restaurant_types = RestaurantType::all();
        // dd( $restaurant_types);
        return view('submit-restaurant', compact('page_title','restaurant_types'));
    }

    public function save_frontend_restaurant(Request $request){

        //Create new User set to not verified
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'string|email|max:255|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);

        if ($validator->fails()) {
            return redirect()->route('submit.restaurant')
                        ->withErrors($validator)
                        ->withInput();
        }

         //Create new Restaurant set to not verified
         $restaurant = new Restaurant;
         $restaurant->name = $request->restaurant_name;
         $restaurant->description = $request->restaurant_description;
         $restaurant->location = $request->restaurant_location;
         $restaurant->restaurant_type_id = $request->restaurant_type_id;
         $restaurant->save();

        //find userType
        $userType = UserType::where('name','Manager')->first();
        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        //create user name with Slug function
        $slug = new Slug;
        $name = $request->firstname.' '.$request->lastname.''.rand(100,999);
        $username = $slug->createUsername($name);
        $user->username = $username;
        $user->user_type_id = $userType->id;
        $user->password = Hash::make($request->password);
        $user->restaurant_id = $restaurant->id;
        $user->save();

         //create user profile
         $profile = new Profile;
         
         $profile->phonenumber = $request->phonenumber;
         $profile->user_id = $user->id;
         $profile->save();
       
        session()->flash('message', 'Hello'.' '.$user->firstname);
        return redirect()->route('submit.restaurant');
    }

    //Delivery Man functions

    public function rider(){
        $page_title = 'Work With Us';
        return view('rider-signup', compact('page_title'));
    }

    public function save_rider(Request $request){
        
        //Create new Rider
        $rider = new Rider;
        $rider->firstname = $request->firstname;
        $rider->lastname = $request->lastname;
        $rider->email = $request->email;
        $rider->phonenumber = $request->phonenumber;
        $rider->student = $request->student;
        $rider->motor = $request->motor;
        $rider->license = $request->license;
        $rider->mobile = $request->mobile;
        
        $rider->save();

        session()->flash('message', 'Hello'.' '.$rider->firstname);
        return redirect()->route('view.rider.form');
    }
}

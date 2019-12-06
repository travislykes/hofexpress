<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\RestaurantType;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;
use App\Services\Slug;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use App\UserType;

class UserController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'All Users';
        $restaurants = Restaurant::all();
        $users = User::all();
        $usertypes = UserType::all();
        
        // dd($restaurants);
        return view('admin.users.index', compact('restaurants','page_title','users','usertypes'));
    }

    public function admins()
    {
        $page_title = 'All Admins';
        $restaurants = Restaurant::all();
        $users = User::all();
        $usertypes = UserType::all();
        
        // dd($restaurants);
        return view('admin.users.index', compact('restaurants','page_title','users','usertypes'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        //create user name with Slug function
        $slug = new Slug;
        $name = $request->firstname.' '.$request->lastname.''.rand(100,999);
        $username = $slug->createUsername($name);
        $user->username = $username;
        $user->user_type_id = $request->user_type_id;
        $user->password = Hash::make('Secret1234$$');
        $user->save();
        session()->flash('message', 'Admin Created successfully!');
        return redirect()->route('admin.all.admins');
    }

    public function store_manager(Request $request)
    {
        // dd($request);
        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        //create user name with Slug function
        $slug = new Slug;
        $name = $request->firstname.' '.$request->lastname.''.rand(100,999);
        $username = $slug->createUsername($name);
        $user->username = $username;
        $user->user_type_id = $request->user_type_id;
        $user->restaurant_type_id = $request->restaurant_type_id;
        $user->password = Hash::make('Secret1234$$');
        $user->save();
        session()->flash('message', 'Restaurant Manager Created successfully!');
        return redirect()->route('admin.all.admins');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $page_title = 'Restaurant Manager';
        $restaurants = Restaurant::all();
        $restaurantTypes = RestaurantType::all();

        return view('admin.restaurants.edit', compact('restaurants','page_title','restaurantTypes','restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        //create user name with Slug function
        $slug = new Slug;
        $name = $request->firstname.' '.$request->lastname.''.rand(100,999);
        $username = $slug->createUsername($name);
        $user->username = $username;
        $user->user_type_id = $request->user_type_id;
        $user->restaurant_type_id = $request->restaurant_type_id;
        $user->password = Hash::make('Secret1234$$');
        $user->update();
        session()->flash('message', 'Updated successfully!');
        return redirect()->route('admin.restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('message', 'User Deleted successfully!');
        return redirect()->route('admin.user.types');
    }
}

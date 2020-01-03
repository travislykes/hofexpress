<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use Auth;
use App\Menu;
use App\RestaurantType;
use App\Preferences;

class MyRestaurantController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');  
    }

    public function onboard()
    {   
        
        $page_title = 'Complete Restaurant Profile';
        $rid = Auth::user()->restaurant_id;
        $my_rest = Restaurant::where('id', $rid)->first();
        $restaurantTypes = RestaurantType::all();
        // dd($restaurants);
        if($my_rest->completed == 'no'){

            return view('manager.restaurant.onboard', compact('my_rest','page_title','restaurantTypes'));
        }
        else{
            return redirect('my.menus');
        }
       }

    public function complete(Request $request, Restaurant $restaurant)
    {

        //Upload Logo
        if ($request->hasFile('logo'))
        {
 
          $destinationPath = public_path('restaurant/logos'); // upload path
          $extension = $request->file('logo')->getClientOriginalExtension();
 
          $logo = rand(11111111, 99999999) . '.' . $extension;
 
          $request->file('logo')->move($destinationPath, $logo); // uploading file to given path
            
          $restaurant->logo = $logo;
        
        }
        //Upload Cover Image
        if ($request->hasFile('cover_image'))
        {
 
          $destinationPath = public_path('restaurant/cover'); 
          $extension = $request->file('cover_image')->getClientOriginalExtension();
 
          $cover_image = rand(11111111, 99999999) . '.' . $extension;
 
          $request->file('cover_image')->move($destinationPath, $cover_image); // uploading file to given path
 
          $restaurant->cover_image = $cover_image;
        }

        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->location = $request->location;
        $restaurant->completed = 'yes';
        $restaurant->restaurant_type_id = $request->restaurant_type_id;
        $restaurant->update();
        session()->flash('message', 'Restaurant Data has been updated successfully!');
        return redirect()->route('my.preferences');
    }

    public function preferences()
    {   
        
        $page_title = 'Restaurant Settings';
        $rid = Auth::user()->restaurant_id;
        $my_rest = Restaurant::where('id', $rid)->first();
        $restaurantTypes = RestaurantType::all();
        $find_pref = Preferences::where('restaurant_id', $rid)->first();
        if(!empty($find_pref)){
            return redirect()->route('my.menus');
        }
        else{
            return view('manager.restaurant.preferences', compact('my_rest','page_title','restaurantTypes','rid'));
        }
        
       }

    public function pref_complete(Request $request)
    {

        $preference = new Preferences;
        
        $preference->restaurant_id = $request['rid'];
        $preference->weekends = $request['weekends'];
        $preference->weekdays = $request['weekdays'];
        $preference->holidays = $request['holidays'];
        $preference->delivery = $request['delivery'];
        $preference->reservationsAllowed = $request['reservationsAllowed'];
        $preference->save();
       
        session()->flash('message', 'Restaurant Preference has been saved successfully!');
        return redirect()->route('my.menus');
    }

    public function index()
    {
        //
    }

   
    public function create()
    {
        //
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
        //
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

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\RestaurantType;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Traits\FileUploadTrait;

class RestaurantController extends Controller
{
    use FileUploadTrait;
  
    public function index()
    {
        $page_title = 'Restaurant Manager';
        $restaurants = Restaurant::all();
        $restaurantTypes = RestaurantType::all();
        // dd($restaurants);
        return view('admin.restaurants.index', compact('restaurants','page_title','restaurantTypes'));
    }

   
    public function store(Request $request)
    {
        // dd($request);
        $restaurant = new Restaurant;

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
        $restaurant->verified = $request->verified;
        $restaurant->location = $request->location;
        $restaurant->restaurant_type_id = $request->restaurant_type_id;
        $restaurant->save();
        session()->flash('message', 'Restaurant Created successfully!');
        return redirect()->route('admin.restaurants');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
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
    public function update(Request $request, Restaurant $restaurant)
    {
        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
        $restaurant->location = $request->location;
        $restaurant->verified = $request->verified;
        $restaurant->restaurant_type_id = $request->restaurant_type_id;
        $restaurant->update();
        session()->flash('message', 'Restaurant Data has been updated successfully!');
        return redirect()->route('admin.restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        session()->flash('message', 'Restaurant Deleted successfully!');
        return redirect()->route('admin.user.types');
    }
}

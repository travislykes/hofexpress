<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\RestaurantType;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Restaurant Manager';
        $restaurants = Restaurant::all();
        $restaurantTypes = RestaurantType::all();
        // dd($restaurants);
        return view('admin.restaurants.index', compact('restaurants','page_title','restaurantTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurant = new Restaurant;

        $restaurant->name = $request->name;
        $restaurant->description = $request->description;
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
        $restaurant->restaurant_type_id = $request->restaurant_type_id;
        $restaurant->update();
        session()->flash('message', 'Updated Created successfully!');
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

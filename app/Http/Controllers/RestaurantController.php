<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Menu;
use App\RestaurantType;
use App\Food;
use App\Preferences;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'All Restaurants';
        $restaurants = Restaurant::where('verified', 'yes')->get();
        return view('restaurant.index', compact('page_title','restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        $page_title = ucfirst($restaurant->name);
        $food = Food::where('restaurant_id', $restaurant->id)->get();
        $menu = Menu::where('restaurant_id', $restaurant->id)->get();
        $pref = Preferences::where('restaurant_id', $restaurant->id)->first();
        return view('restaurant.details', compact('page_title','restaurant','page_title','menu','food','pref'));
    }

    public function view(Restaurant $restaurant)
    {
        // $restaurant = Restaurant::where('slug', $slug)->first();
        $page_title = ucfirst($restaurant->name);
        $food = Food::where('restaurant_id', $restaurant->id)->get();
        $menu = Menu::where('restaurant_id', $restaurant->id)->get();
        $pref = Preferences::where('restaurant_id', $restaurant->id)->first();
        return view('restaurant.show', compact('page_title','restaurant','page_title','menu','food','pref'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\RestaurantType;
use Illuminate\Http\Request;

class RestaurantTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Restaurant Type Manager';
        $restaurantTypes = RestaurantType::all();
        return view('admin.restaurantTypes.index', compact('restaurantTypes','page_title'));
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
        $restaurantType = new RestaurantType;

        $restaurantType->name = $request->name;
        $restaurantType->description = $request->description;

        $restaurantType->save();
        session()->flash('message', 'Restaurant Type Created successfully!');
        return redirect()->route('admin.restaurant.types');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(RestaurantType $restaurantType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(RestaurantType $restaurantType)
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
    public function update(Request $request, RestaurantType $restaurantType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestaurantType $restaurantType)
    {
        //
    }
}

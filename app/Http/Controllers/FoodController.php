<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Auth;
use App\Restaurant;
use App\Menu;
use App\RestaurantType;
use App\Preferences;

class FoodController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');  
    }

    public function index()
    {
        $page_title = 'Food';
        $rid = Auth::user()->restaurant_id;
        $my_rest = Restaurant::where('id', $rid)->first();
        $menu = Menu::where('restaurant_id', $rid)->get();
        $restaurantTypes = RestaurantType::all();
        $foods = Food::where('restaurant_id', $rid)->get();
        return view('manager.food.index', compact('my_rest','page_title','restaurantTypes','rid','foods','menu'));
       
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
        $food = new Food;
        // dd($request);
        $food->name = $request->name;

        if ($request->hasFile('image'))
        {
 
          $destinationPath = public_path('restaurant/food'); // upload path
          $extension = $request->file('image')->getClientOriginalExtension();
 
          $image = rand(11111111, 99999999) . '.' . $extension;
 
          $request->file('image')->move($destinationPath, $image); // uploading file to given path
            
          $food->image = $image;
        
        }
        $food->restaurant_id = $request->rid;
        $food->price = $request->price;
        $food->description = $request->description;
        $food->menu_id = $request->menu_id;
        $food->save();
        session()->flash('message', 'Food has been saved successfully!');
        return redirect()->route('food.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }
}

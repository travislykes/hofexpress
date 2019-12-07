<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Auth;
use App\Restaurant;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'My Menus';
        $rid = Auth::user()->restaurant_id;
        $my_restaurant = Restaurant::where('id',$rid)->first();
        $menus = Menu::where('restaurant_id', $rid)->get();
        return view('manager.menus.index', compact('page_title','menus','my_restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu;

        $menu->description = $request->description;
        $menu->name = $request->name;
        $menu->restaurant_id = Auth::user()->restaurant_id;
        $menu->save();
        session()->flash('message', 'Menu Created successfully!');
        return redirect()->route('my.menus');
    }

    
    public function edit(Menu $menu)
    {
        
        $page_title = 'Manage Menus';
        $rid = Auth::user()->restaurant_id;
        $my_restaurant = Restaurant::where('id',$rid)->first();
        $menus = Menu::where('restaurant_id', $rid)->get();
        return view('manager.menus.edit', compact('page_title','menus','my_restaurant','menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
       
        $menu->description = $request->description;
        $menu->name = $request->name;
        $menu->restaurant_id = Auth::user()->restaurant_id;
        $menu->update();
        session()->flash('message', 'Menu Updated successfully!');
        return redirect()->route('my.menus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        session()->flash('message', 'Menu Deleted successfully!');
        return redirect()->route('my.menus');
    }
}

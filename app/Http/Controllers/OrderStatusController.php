<?php

namespace App\Http\Controllers;

use App\OrderStatus;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Order Status Manager';
        $orderStatuses = OrderStatus::all();
        return view('admin.settings.orderstatus', compact('status','page_title','orderStatuses'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orderStatus = new OrderStatus;

        $orderStatus->name = $request->name;
        $orderStatus->description = $request->description;

        $orderStatus->save();
        session()->flash('message', 'Order Staus Created successfully!');
        return redirect()->route('admin.orderStatus');
    }

   
    
    public function edit(OrderStatus $orderStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderStatus $orderStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderStatus  $orderStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderStatus $orderStatus)
    {
        $orderStatus->delete();
        session()->flash('message', 'Order Staus Deleted successfully!');
        return redirect()->route('admin.orderStatus');
    }
}

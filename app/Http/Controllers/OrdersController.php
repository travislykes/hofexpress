<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;
use App\Restaurant;
use App\OrderStatus;
use App\PaymentType;
use App\DeliveryType;
use App\Location;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart(Order $order)
    {
        $page_title = 'Complete Order';
        $locations = Location::where('user_id', Auth::user()->id)->get();
        $payment_types = PaymentType::all();
        $delivery_types = DeliveryType::all();
        return view('cart',compact('page_title','order','delivery_types','payment_types','locations'));
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
        $status = OrderStatus::where('name','new')->first();
        $order = new Order;

        $order->user_id = Auth::user()->id;
        $order->order_status_id = $status;
        $order->total = $request->total;
       // dd($request->identifier);
        
        // $order->food()->attach();
        $order->save();

        for ($i = 0; $i < count($request->identifier); $i++) {
            $order->food()->attach([$request->identifier[$i] => ['quantity' => $request->qty[$i]]]);
        }
        // dd($order->id);
        return redirect()->route('cart',[$order->id]);
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
    public function completed(Order $order)
    {
        $page_title = 'Order Completed';

        return view('order-completed',compact('page_title','order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function save_order(Request $request, Order $order)
    {
        $order->location_id = $request->location_id;
        $order->payment_type_id = $request->payment_type_id;
        $order->delivery_type_id = $request->delivery_type_id;
        $order->update();
        return redirect()->route('order.submitted',[$order->id]);
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

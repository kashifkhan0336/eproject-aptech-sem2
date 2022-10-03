<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrdersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Order $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrdersRequest  $request
     * @param  \App\Models\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdersRequest $request, Order $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $orders)
    {
        //
    }
}

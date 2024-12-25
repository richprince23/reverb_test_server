<?php

namespace App\Http\Controllers;

use App\Events\OrderUpdatedEvent;
use App\Events\TestEvent;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()  {
        return Order::all();
    }

    public function store(Request $request) {
        $order = new Order();
        $order->status = $request->input('status');
        $order->comment = $request->input('comment');
        $order->total = $request->input('total');
        $order->save();

        broadcast(new OrderUpdatedEvent($order));
        return response()->json($order, 201);
        // // Log::debug("event fired");
        // event(new OrderUpdatedEvent($order));



        // return response()->json(['message' => 'Order created successfully'], 201);
    }

    public function test(Request $request) {
        $message = $request->comment;
        // broadcast(new TestEvent($message))->toOthers();
        broadcast(new TestEvent($message));

        return response()->json(['message' => 'Order created successfully'], 200);
    }
}

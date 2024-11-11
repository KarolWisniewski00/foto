<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\Photo;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.group.index', compact('orders'));
    }
    public function show(Order $order)
    {
        $items = Item::where('order_id', $order->id)->get();
        $photos = Photo::where('order_id', $order->id)->get();
        return view('admin.group.show', compact('order', 'items', 'photos'));
    }
}

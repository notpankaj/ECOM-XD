<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return view('order.index');
    }

    public function store(Request $req)
    {





        $req->validate([
            "fullname" => 'required',
            "state" => 'required',
            "city" => 'required',
            "zipcode" => 'required',
            "address" => 'required',
            "mobile" => 'required',
            "payment_method" => 'required'

        ]);

        if($req->payment_method === "paypal"){
            return "PAYPAL PAGE";
        }
        if($req->payment_method === "stripe"){
            return "STRIPE PAGE";
        }
        if($req->payment_method === "card"){
            return "CARD LAGO AB";
        }




        // $user = auth()->user();

        // // make order
        // $order = new Order();
        // $order->user_id = $user->id;
        // $order->order_number = uniqid('order-number-');



        // $order->shipping_full_name = $req->fullname;
        // $order->shipping_address = $req->address;
        // $order->shipping_zipcode = $req->zipcode;
        // $order->shipping_phone = $req->mobile;
        // $order->shipping_state = $req->state;
        // $order->shipping_city = $req->city;

        // $itemCount = 0;
        // $grandTotal = 0;


        // foreach($user->cart as $item){
        //     $qty = $item->quantity;
        //     $total = $item->total;

        //     $itemCount += $qty;
        //     $grandTotal += $total;
        // }

        // $order->item_count = $itemCount;
        // $order->grand_total = $grandTotal;

        // $order->save();

        // foreach($user->cart as $item){
        //     $order->products()->attach($item->product,['price' => $item->total , 'quantity' => $item->quantity , 'product_id' => $item->product_id]);
        // };


        // //empty cart
        // foreach($user->cart as $item){
        //     $item->delete();
        // }



    }
}
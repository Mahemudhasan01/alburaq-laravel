<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    //Fronted Side Code!!!
    public function viewCheckOut()
    {
        $total_price = 0;
        $carts = DB::table('carts')->get();

        foreach ($carts as $item) {
            $total_price += $item->price;
        }
        return view('frontend/checkout', ['carts' => $carts, 'total_price' => $total_price]);
    }

    public function insertOrder(Request $req)
    {

        $msg = $req->validate(
            [
                'f_name' => 'required',
                'l_name' => 'required',
                'email' => 'required|email',
                'mobile' => 'required|digits_between :10,13',
                'address1' => 'required',
                'address2' => 'required',
                'country' => 'required',
                'city' => 'required',
                'state' => 'required',
                'pin_code' => 'required|digits_between: 6,6',
            ]
        );

        $test = DB::table('orders')->insert([

            'first_name' => $req->f_name,
            'last_name' => $req->l_name,
            'email' => $req->email,
            'mobile' => $req->mobile,
            'address1' => $req->address1,
            'address2' => $req->address2,
            'country' => $req->country,
            'city' => $req->city,
            'state' => $req->state,
            'pin_code' => $req->pin_code,
            'total_amount' => $req->total_price,
            'shipping_charge' => 100,
        ]);

            return redirect()->back()->with('success', 'Order Place Successfuly');
    }

    //Backend Side Codes!!!

    public function viewOrders()
    {
        $orders = DB::table('orders')->get();
        return view('backend/orders', ['orders' => $orders]);
    }

    public function deleteOrders($id)
    {
        DB::table('orders')->delete($id);

        return redirect()->back();
    }
}

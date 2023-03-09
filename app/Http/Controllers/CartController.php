<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // Frontend Side Code!!!

    //Show Carts Data
    public function viewShoppingCart()
    {
        $total_price = 0;
        $carts = DB::table('carts')->get();

        foreach ($carts as $item) {
            $total_price += $item->price;
        }
        return view('frontend/cart', ["carts" => $carts, 'total_price' => $total_price]);
    }
    
    public function addShoppingCart($id)
    {
        $product = Product::where('id', $id)->first();

        $cart = DB::table('carts')->where('product_id', '=', $id)->pluck('product_id');

        if (empty($cart['0'])) {
            DB::table('carts')->insert([
                'product_name' => $product->name,
                'img' => $product->img,
                'price' => $product->price,
                'product_id' => $product->id,
            ]);
            return redirect('/');
        } else {
            return back()->with('message', 'This item already added');
        }
    }

    //Remove carts Item
    public function removeCartItem($id)
    {
        DB::table('carts')->delete($id);
        return redirect()->back();
    }

}

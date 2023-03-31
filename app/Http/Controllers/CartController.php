<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // Frontend Side Code!!!

    //Show Carts Data
    public function viewShoppingCart()
    {
        if (session()->has('user')) {
            $total_price = 0;
            $session = session()->get('user');

            //Get Products Details
            
            $carts = DB::table('products')
            ->join('carts', 'carts.product_id', '=', 'products.id', 'right')
            ->where('carts.user_id', '=', $session['id'])
            ->select()
            ->get();
           
            // dd($carts);
            foreach ($carts as $item) {
                $total_price += $item->price;
            }
            return view('frontend/cart', ["carts" => $carts, 'total_price' => $total_price]);
        } else {
            return redirect(route('view.login'));
        }
    }

    public function addShoppingCart($id)
    {
        if (session()->has('user')) {
            //Get ID from session
            $userid = session()->get('user');

            $product = Product::where('id', $id)->first();

            $cart = DB::table('carts')
                ->where('product_id', '=', $id)
                ->where('user_id', '=', $userid['id'])
                ->pluck('product_id');

            if (empty($cart['0'])) {
                DB::table('carts')->insert([
                    'user_id' => $userid['id'],
                    'product_id' => $product->id,
                    'quantity' => 1,
                    'price' => $product->price,
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
                return redirect('/');
            } else {
                return back()->with('message', 'This item already added');
            }
        } else {
            return redirect(route('view.login'));
        }
    }

    //Remove carts Item
    public function removeCartItem($id)
    {
        DB::table('carts')->delete($id);

        return redirect()->back();
    }
}

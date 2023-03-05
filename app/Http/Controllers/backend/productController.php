<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class productController extends Controller
{
    public function viewLogin()
    {
        return view('frontend/userlogin');
    }

    public function viewSignUp()
    {
        return view('frontend/usersignup');
    }

    public function userLogin(Request $req)
    {
        $userData = DB::table('users')->where('email', '=', $req->email)->first();
        //Check password is matched ?
        if ($userData->password == $req->pass) {
            //Matched
            $req->session()->put('user', ["id" => $userData->id, "name" => $userData->name]);

            return view('frontend/userlogin');
        } else {
            return back()->with('error', "Email and Password Is Wrong!");
        }
    }

    public function addNewUser(Request $req)
    {

        $msg = $req->validate([
            'user' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                Password::min(8)
            ],
            'password_confirmation' => 'required|same:password'
        ]);

        DB::table('users')->insert([
            "name" => $req->user,
            "email" => $req->email,
            "password" => $req->password,
        ]);

        return view('frontend/usersignup', ['errors' => $msg]);
    }

    public function homePage()
    {
        return view('frontend/index');
    }

    public function contactPage(){
        return view('frontend/contact');
    }

    public function index()
    {
        $products = DB::table('products')->get();
        return view('frontend/shop', ['products' => $products]);
    }

    public function index1()
    {
        return view('backend/index');
    }

    public function productView()
    {
        $products = DB::table('products')->get();
        return view('backend/post', ['products' => $products]);
    }

    public function inserProduct()
    {
        return view('backend/add_post');
    }

    public function addProduct(Request $req)
    {
        // dd($req);
        $req->validate(
            [
                'product_name' => 'required',
                'postdesc' => 'required',
                'fileToUpload' => 'required',
                // 'category' => 'required',
            ]
        );

        $product = new Product();

        $product->name = $req->product_name;
        $product->description = $req->postdesc;

        if ($req->hasFile('fileToUpload')) {
            $file = $req->file('fileToUpload');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products', $filename);
            $product->img = $filename;
        }
        $product->category = 'Test';
        $product->orignal_price = $req->orignal_price;
        $product->price = $req->price;
        $product->save();

        return redirect('admin/products')->with('status', 'Data Inserted Successfully');
    }

    public function deleteProduct($product_id)
    {
        Product::where('id', $product_id)->firstorfail()->delete();
        return redirect('/admin/products');
    }

    public function updateProduct($id)
    {
        return view('backend/update-post');
    }

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

    // Add to cart
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

    //Show Product Details
    public function productDetail()
    {
        return view('frontend/detail');
    }

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

    public function viewOrders()
    {
        $orders = DB::table('orders')->get();
        return view('backend/users', ['orders' => $orders]);
    }

    public function deleteOrders($id)
    {
        DB::table('orders')->delete($id);

        return redirect()->back();
    }
}

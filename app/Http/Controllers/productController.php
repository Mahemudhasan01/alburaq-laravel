<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;

class productController extends Controller
{
    // *** Frontend Side Stuff ***
    public function homePage()
    {
        $category_name = DB::table('categorys')->get();
        $trending_products = DB::table('products')->where('trending', '=', 'Yes')->get();
        $special_products = DB::table('products')->where('special', '=', 'Yes')->get();
        // dd($special_products);
        return view('frontend/index', ['category' => $category_name, 'special_products' => $special_products, 'trending_item' => $trending_products]);
    }


    public function contactPage(){
        return view('frontend/contact');
    }

    public function showProducts()
    {
        $products = DB::table('products')->get();
        return view('frontend/shop', ['products' => $products]);
    }

    // *** Backend Side Stuff ***

    public function adminLogin()
    {
        return view('backend/index');
    }

    //Show Product in table
    public function productView()
    {
        $products = DB::table('products')->get();
        
        return view('backend/post', ['products' => $products]);
    }

    public function inserProduct()
    {
        $categorys = DB::table('categorys')->get();
        return view('backend/add_post', ['categorys' => $categorys]);
    }


    public function addProduct(Request $req)
    {
    //  dd($req->file());   
        // dd($req);
        $req->validate(
            [
                'product_name' => 'required',
                'postdesc' => 'required',
                'category' => 'required',
                'price' => 'required',
                'orignal_price' => 'required',
                'category' => 'required',
            ]
        );

        $product = new Product();

        $product->name = $req->product_name;
        $product->description = $req->postdesc;

        if ($req->hasFile('front_side_img')) {
            $file = $req->file('front_side_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products', $filename);
            $product->img = $filename;
        }
        if ($req->hasFile('right_side_img')) {
            $file = $req->file('right_side_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products', $filename);
            $product->right_side_img = $filename;
        }
        if ($req->hasFile('back_side_img')) {
            $file = $req->file('back_side_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products', $filename);
            $product->back_side_img = $filename;
        }
        if ($req->hasFile('up_side_img')) {
            $file = $req->file('up_side_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('uploads/products', $filename);
            $product->up_side_img = $filename;
        }
        $product->category = $req->category;
        $product->luxury = $req->luxury;
        $product->trending = $req->trending;
        $product->special = $req->special;
        $product->gender = $req->gender;
        $product->orignal_price = $req->orignal_price;
        $product->price = $req->price;
        $product->created_at = date('Y-m-d H:i:s');
        // dd($product);
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
   
    //Show Product Details
    public function productDetail()
    {
        return view('frontend/detail');
    }
}

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
    public function homePage()
    {
        return view('frontend/index');
    }

    public function contactPage(){
        return view('frontend/contact');
    }

    public function showProducts()
    {
        $products = DB::table('products')->get();
        return view('frontend/shop', ['products' => $products]);
    }

    public function adminIndex()
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
   
    //Show Product Details
    public function productDetail()
    {
        return view('frontend/detail');
    }
}

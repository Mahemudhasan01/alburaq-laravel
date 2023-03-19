<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    // *** Fronted Side Stuff ***
    public function showCategory($cat)
    {
        //Get Categorys by ID for frontend
        $categorys = DB::table('products')
            ->join('categorys', 'categorys.id', '=', 'products.category')
            ->where('categorys.id', '=', $cat)
            ->get();


        return view('frontend/category', ['categorys' => $categorys, 'cat_id' => $cat]);
    }

    //Get Categorys for mobile 
    public function getLuxuryCategory()
    {
        $categorys = DB::table('products')
            ->join('categorys', 'categorys.id', '=', 'products.category')
            ->where('categorys.is_luxury', '=', 'Yes')
            ->get()->toArray();


        return view('frontend/category', ['categorys' => $categorys, 'category_name' => 'Luxury Products']);
    }

    public function getWomanCategory()
    {
        # code...
        $categorys = DB::table('products')
            ->join('categorys', 'categorys.id', '=', 'products.category')
            ->where('categorys.gender', '=', 'Female')
            ->get()->toArray();


        return view('frontend/category', ['categorys' => $categorys, 'category_name' => "Woman's Products"]);
    }

    public function getManCategory()
    {
        # code...
        $categorys = DB::table('products')
            ->join('categorys', 'categorys.id', '=', 'products.category')
            ->where('categorys.gender', '=', 'Male')
            ->get()->toArray();


        return view('frontend/category', ['categorys' => $categorys, 'category_name' => "Male's Products"]);
    }

    public function getUnisexCategory()
    {
        # code...
        $categorys = DB::table('products')
            ->join('categorys', 'categorys.id', '=', 'products.category')
            ->where('categorys.gender', '=', 'Female')
            ->get()->toArray();


        return view('frontend/category', ['categorys' => $categorys, 'category_name' => "Unisex Products"]);
    }

    // *** Backend Side Stuff***
    public function viewCategory()
    {
        $categorys = DB::table('categorys')->select()->orderBy('id', 'DESC')->get();
        $count = 0;
        return view('backend/category', ['categorys' => $categorys, 'count' => $count]);
    }

    public function viewAddCategory()
    {
        return view('backend/add_category');
    }

    //Add New Category
    public function addCategory(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'gender' => 'required',
            'luxsury' => 'required',
        ]);

        //Check whether validation failed or not 
        if ($validator->fails()) {
            //Failed
            return Redirect::back()->withErrors($validator);
        } else {
            // Pass
            DB::table('categorys')->insert([
                // 'product_id' => 1,
                'category_name' => $request->category,
                'gender' => $request->gender,
                'is_luxury' => $request->luxsury,
                "created_at" =>  date('Y-m-d H:i:s'),
            ]);

            return redirect(route('view.category'));
        }
    }

    public function viewEditCategory($id)
    {
        $category = DB::table('categorys')->where('id', '=', $id)->get();

        return view('backend/update-category', ['category' => $category]);
    }

    public function updateCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
            'gender' => 'required',
            'luxsury' => 'required',
        ]);

        //Check whether validation failed or not 
        if ($validator->fails()) {
            //Failed
            return Redirect::back()->withErrors($validator);
        } else {
            // Pass
            DB::table('categorys')
                ->where('id', '=', $request->id)
                ->limit(1)
                ->update([
                    // 'product_id' => 1,
                    'category_name' => $request->category,
                    'gender' => $request->gender,
                    'is_luxury' => $request->luxsury,
                    "updated_at" =>  date('Y-m-d H:i:s'),
                ]);

            return redirect(route('view.category'));
        }
    }

    public function deleteCategory($id)
    {
        $category = DB::table('products')
            ->where('category', '=', $id)
            ->pluck('category');

        // dd(count($category) == 0);
        if (count($category) == 0) {
            // True
            DB::table('categorys')->delete($id);

            return redirect(route('view.category'));
        } else {
            //False
            return "You can't delete this category Because it refer some where";
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


class UserController extends Controller
{

    public function viewLogin()
    {
        return view('frontend/userlogin');
    }

    public function viewSignUp()
    {
        return view('frontend/usersignup');
    }

    //Check login Credential
    public function userLogin(Request $req)
    {
        $msg = $req->validate([
            'user' => 'required',
            'email' => 'required|email',
        ]);

        $userData = DB::table('users')->where('email', '=', $req->email)->first();
        //Check password is matched ?
        if ($userData->password == $req->pass) {
            //Matched
            $req->session()->put('user', ["id" => $userData->id, "name" => $userData->name]);

            return redirect(route('home.index'));
        } else {
            //Not Matched
            return back()->with('error', "Email and Password Is Wrong!");
        }
    }

    public function addNewUser(Request $req)
    {

        $validate = Validator::make($req->all(), [
            'user' => 'required',
            'email' => 'unique:users,email,$this->id,id',
            'password' => [
                'required',
                Password::min(8)
            ],
            'password_confirmation' => 'required|same:password'
        ]);

        if($validate->fails()){
            return Redirect::back()->withErrors($validate);
        }else{
            $is_insert = DB::table('users')->insert([
                "name" => $req->user,
                "email" => $req->email,
                "password" => $req->password,
            ]);
        }

        if($is_insert === True){
            return redirect(route('home.index'));
        }
    }

    // Backend Side Code !!!

    //Login 
    public function checkLogin(Request $req)
    {
        # code...
        Validator::make($req->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = DB::table('users')
                    ->where('email', '=', $req->email)
                    ->where('password', '=', $req->password)
                    ->where('admin', '=', 1)->get();
                    
        if(empty($data)){
            return redirect()->back();
        }else{
            session()->put('adminUser', $data);
            return redirect(route('product.view'));
        }
    }

    public function adminLogout()
    {
        Session::flash('adminUser');
        return redirect(route('home.index'));
    }

    //Show All the users
    public function showUsers()
    {
        $users = DB::table('users')->get();

        return view('backend/users', ['users' => $users]);
    }
}

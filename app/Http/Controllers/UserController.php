<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
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

    // Backend Side Code !!!

    public function index()
    {
        $users = DB::table('users')->get();

        return view('backend/users', ['users' => $users]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function user(Request $request)
    {
        return view('backend.user.homeuser');
        // return $request->session()->get('password');
        // if ($request->session()->get('password') == "admin") {
        //     // redirect('/home');
        // }
        // echo $request->session()->get('password');
    }
}

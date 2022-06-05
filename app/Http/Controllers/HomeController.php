<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function admin(Request $request)
    {
        return view('backend.admin.admin');
        if ($request->session()->get('password') != 'admin') {
            redirect('backend.user.homeuser');
        }
        // return $request->session()->get('password');
    }
}

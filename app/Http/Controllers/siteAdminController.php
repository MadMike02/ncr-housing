<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class siteAdminController extends Controller
{
    function dash(Request $request)
    {
        // $data = $request->session()->all();

        //getting user info on id
        // $head = array(
        //     "access-token" => $request->session()->get('token'),
        // );
        // $userData = Http::withHeaders($head)
        // ->get('https://ncrhousingapi.herokuapp.com/api/user')->json();

        return view('front.admin.dashboard');
    }

    function prop_list_view()
    {
        return view('front.admin.prop_list');
    }

    function add_property_view()
    {
        return view('front.admin.add_property');
    }

    function change_password_view()
    {
        return view('front.admin.change_pass');
    }
}

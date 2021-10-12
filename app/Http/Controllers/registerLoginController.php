<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Cookie;

class registerLoginController extends Controller
{
    function register_user(Request $request)
    {
        $data = array(
            "fullname" => $request->name,
            "email" => $request->email,
            "password" => $request->pass,
            "contact" => $request->number,
            "role" => $request->role
        );

        // dd($data);
        $response = Http::post(env('API_URL').'register', $data)->json();
        if(!$response)
        {
           
           return redirect()->route('view_home')->with('message', "API server down. Kindly try again later");
        }   
        else{
           
            if($response["status"] == "error")
            {
                return redirect()->route('view_home')->with('message', $response["message"]);
            }
            else{
                // dd($response);
                
                return redirect()->route('view_home')->with('message2', "Account created successfully. Please Proceed login");
            }
        }
    }
    
    function login_user(Request $request)
    {
        $response = Http::post(env('API_URL').'login',[
            "email" => $request->email,
            "password" => $request->pass,
        ])->json();
        
        if(!$response)
        {
            $message = "API server down. Kindly try again later";
            return view('front.index',$message);
        }   
        else{
            if($response["status"] == "success")
            {
                // dd($response);
                //seting cookie
                Cookie::queue('token',$response['token'], 120);

                //seting sessions
                $request->session()->put([
                        "name" => $response['userData']["username"], 
                        "role" => $response['userData']['userRole'],
                        "token" => $response['token']
                ]);

                return redirect()->route('admin_dash');

            }
            else{
                
                return redirect()->route('view_home')->with('message', $response["message"]);
            }
        }
    }

    function logout_user(Request $request)
    {
        // Cookie::forget('token');
        Cookie::queue(Cookie::forget('token'));
        $request->session()->flush();

        return redirect('/')->with('message2', 'Logged Out' );
    }
}

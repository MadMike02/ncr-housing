<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    function front()
    {
        $response = Http::get(env('API_URL').'latest/property')->json();
        $response2 = Http::get(env('API_URL').'featured/property')->json();
        $response3 = Http::get(env('API_URL').'experts')->json();
        // $data_array = json_decode($response->json(), true);
        // dd($response,$response2,$response3);
        // dd($response);

        return view('front.index',compact('response','response2','response3'));
    }
    function properties()
    {
        return view('front.properties');
    }

    function latest_properties()
    {
        $response = Http::get(env('API_URL').'latest/property')->json();
        // dd($response);
        return view('front.properties_latest',compact('response'));
    }
    function property_detail(Request $request)
    {
        $id = $request->id;
        $detailes = Http::get(env('API_URL').'property/'.$id)->json();
        $feat_property = Http::get(env('API_URL').'featured/property')->json();
        // dd($detailes,$feat_property);
        return view('front.single_property',compact('detailes','feat_property'));
    }

    function home_search(Request $request)
    {

        dd($request->all());
        
        $data = array(
            "availability" => $request->avail,
            "propertyType" => $request->pType,
            "city" => $request->city);

        $detailes = Http::get(env('API_URL').'search/property')->json();

        dd($detailes,$data);
        // return view('front.single_property',compact('detailes','feat_property'));
    }

    function property_comp()
    {
        return view('front.compare-properties');
    }
}

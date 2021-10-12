<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class propertyController extends Controller
{
    function save_short_desc(Request $request)
    {
        dd($request->all());
        
        $data = array(
            "title" => $request->input('title'),
            "availability" => $request->input('availability'),
            "propertyOverview" => $request->input('propertyOverview'),
            "propertyType" => $request->input('propertyType'),
            "price" => $request->input('price'),
            "buildYear" => $request->input('buildYear'),
            "dimensions" => $request->input('dimensions'),
            "summary" => $request->input('summary'),
            "address" => $request->input('address'),
            "city" => $request->input('city'),
            "state" => $request->input('state'),
            "pincode" => $request->input('pincode'),
            "latitude" => $request->input('latitude'),
            "longitude" => $request->input('longitude'),
            "nearby" => $request->input('nearby'),
            "amenities" => $request->input('amenities'),
        );

        
        
        $result = $request->file('bannerImg')->storeOnCloudinaryAs('propertyBanner');
        
        // dd($result);
        // dd($result->getSecurePath(),$result->getPublicId());
        $data["bannerImg"] = [
            "imgUrl" => $result->getSecurePath(),
            "publicId" => $result->getPublicId()
        ];

        // dd($data);
        
        $response = Http::withHeaders([
            'authorization' => 'Bearer '.$request->cookie('token'),
        ])->post(env('API_URL').'list-property', $data)->json();

        // dd($data,$response);

        if($response["status"] == "success")
        {
            $p_id = $response["data"]["_id"];
            
            $data2 = array(
                "propertyId" => $p_id,
                );

            $i=0;

            foreach($request->file('showcaseImg') as $images)
            {
                $result = $images->storeOnCloudinaryAs('PropertyImages');

                $data2["showcaseImg"][$i] = [
                    "imgUrl" => $result->getSecurePath(),
                    "publicId" => $result->getPublicId()
                ];

                $i++;
            }

            // dd($data2);

            $response2 = Http::withHeaders([
                'authorization' => 'Bearer '.$request->cookie('token'),
            ])->put(env('API_URL').'property-images', $data2)->json();

            // dd($response2);
            if($response2["status"] == "success")
            {
                return redirect('/admin/propertyList')->with('message2', 'Property Added Successfully');
            }
            else{
                return redirect('/admin/propertyList')->with('message', 'Unable to Add Property. Please contact administrator.');
            }
        }
        else{
            return redirect('/admin/propertyList')->with('message', 'Unable to Add Property. Please contact administrator.');
        }

    }

    function update_prop_view(Request $request)
    {
        $id = $request->id;
        $detailes = Http::get(env('API_URL').'property/'.$id)->json();
        // dd($detailes);
        return view('front.admin.update_property',compact('detailes'));
    }

    function update_desc(Request $request)
    {
        // dd($request->all());
        $id = $request->input('p_id');
        $data = $request->all();

        $response2 = Http::withHeaders([
            'authorization' => 'Bearer '.$request->cookie('token'),
        ])->put(env('API_URL').'update/property/'.$id, $data)->json();

        // dd($response2);
        if($response2["status"] == "success")
        {
            return redirect('/admin/propertyList')->with('message2', 'Property Added Successfully');
        }
        else
        {
            return redirect('/admin/propertyList')->with('message', 'Something went wrong. Please contact administrator');
        }
        
    }
}

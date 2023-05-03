<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;

use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function getcountry(Request $request)
    {
        $data['countrys'] = Country::where("work_id",$request->work_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
    public function getState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)
                    ->get(["name","id"]);
        return response()->json($data);
    }
}

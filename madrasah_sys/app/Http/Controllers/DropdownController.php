<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator;
use Response;
use Redirect;
use App\Models\{Countries, City};
use App\Models\Mahfil;

class DropdownController extends Controller
{
    // public function index()
    // {
    //     $data['countries'] = Country::get(["name", "id"]);
    //     return view('welcome', $data);
    // }
    public function fetchCountry(Request $request)
    {
        $data['countries'] = Countries::where("work_p_id",$request->work_p_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }
    // public function fetchBrunch(Request $request)
    // {
    //     $data['brunchs'] = Mahfil::where("brunch_name_id",$request->brunch_name_id)->get(["brunch_name_id", "id"]);
    //     return response()->json($data);
    // }
}
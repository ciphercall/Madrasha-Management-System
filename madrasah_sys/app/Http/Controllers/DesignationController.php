<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index(){

        $designation=Designation::all();
        return view("pages.erp.designation.index_designation",["designations"=>$designation]);
        
    }

    public function store(Request $request){

        $designation=new Designation; 
        $designation->name=$request->txtDesignation;
        $designation->deleted_at=$request->txtDeleted_at;
        $designation->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    public function edit(Designation $designation){
        $designation=new Designation; 
        return view("pages.erp.designation.edit_designation",["designations"=>$designation]);
    }

    public function update(Request $request,Designation $designation){
        $designation=new Designation; 
        $designation->name=$request->txtDesignation;
        $designation->deleted_at=$request->txtDeleted_at;		   
        $designation->update();
        return redirect()->route("designation.index_designation")->with('success','Updated Successfully.');
                    
    }

    public function destroy( $id){  
        DB::table("designations")->where("id", $id)->delete();
        return redirect()->route('designations.index')
        ->with('success',' Deleted successfully');
    }

    

}

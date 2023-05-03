<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Occation;
use Illuminate\Http\Request;

class OccationController extends Controller
{
    public function index(){
        $occation=Occation::all();
    //   dd($occation);
         return view("pages.erp.occation.index_occation",["occations"=>$occation]);
        // return view("pages.erp.occation.index_occation");
    
    }

    public function store(Request $request){
        //		Member::create($request->all());
        $occation=new Occation; 
        $occation->name=$request->txtOccasion;
        $occation->deleted_at=$request->txtDeleted_at;
        $occation->save();
               
        return back()->with('success','Created Successfully.');
          
    }


    public function edit(Occation $occation){
        $occation=new Occation; 
        return view("pages.erp.occation.edit_occation",["occations"=>$occation]);
    }


    public function update(Request $request,Occation $occation){
        $occation=new Occation; 
        $occation->name=$request->txtOccasion;
        $occation->deleted_at=$request->txtDeleted_at;		   
        $occation->update();
        return redirect()->route("occation.index_occation")->with('success','Updated Successfully.');
                    
    }

    public function destroy( $id){  
        DB::table("occations")->where("id", $id)->delete();
        return redirect()->route('occations.index')
        ->with('success',' Deleted successfully');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sobok;

class SobokController extends Controller
{
    public function index(){
        $sobok=Sobok::all();
    //   dd($occation);
         return view("pages.erp.sobok.index_sobok",["soboks"=>$sobok]);
        // return view("pages.erp.occation.index_occation");
    
    }

    public function store(Request $request){
        //		Member::create($request->all());
                $sobok=new Sobok; 
                $sobok->name=$request->txtSobok_type;
                $sobok->deleted_at=$request->deleted_at;
                $sobok->save();
               
                return back()->with('success','Created Successfully.');
          
            }

            public function edit(Sobok $sobok){
                $sobok=new Sobok; 
               
        
                return view("pages.erp.sobok.edit_sobok",["soboks"=>$sobok]);
            }


           



            public function update(Request $request,Sobok $sobok){
                $sobok=new Sobok; 
                $sobok->name=$request->txtSobok_type;
                $sobok->deleted_at=$request->txtDeleted_at;		
                        
                
                $sobok->update();
                return redirect()->route("sobok.index_sobok")->with('success','Updated Successfully.');
                    
            }

            public function destroy( $id){
               
                DB::table("soboks")->where("id", $id)->delete();
                return redirect()->route('sobok.index_sobok')
                       ->with('success',' Deleted successfully');
            }

}

<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Duty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class DutyController extends Controller{

	public function index(){

        // $duties = Duty::latest()->paginate(10);
  
        // return view('pages.erp.dutie.index_dutie',compact('duties'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
		$dutie=Duty::paginate(10);
        // dd($dutie);
		 return view("pages.erp.dutie.index_dutie",["duties"=>$dutie]);
	}


	public function create(){

		return view("pages.erp.dutie.create_dutie",[]);
	}


	public function store(Request $request){
//		Dutie::create($request->all());
		$dutie=new Duty;
		$dutie->name=$request->txtName;
		$dutie->deleted_at=$request->txtDeleted_at;

		$dutie->save();
		return back()->with('success','Created Successfully.');
  
	}

    
	public function show($id){
		$dutie=Duty::find($id);
		return view("pages.erp.dutie.show_dutie",["dutie"=>$dutie]);
	}



	public function edit(Duty $dutie){

		return view("pages.erp.dutie.edit_dutie",["dutie"=>$dutie]);
	}



	public function update(Request $request,Duty $dutie){
//		$dutie->update($request->all());
		$dutie->name=$request->txtName;
		$dutie->deleted_at=$request->txtDeleted_at;

		$dutie->update();
		return redirect()->route("duties.index")->with('success','Updated Successfully.');
    
	}



	public function destroy(Duty $dutie){
		$dutie->delete();
		return redirect()->route("duties.index")->with('success','Deleted Successfully.');
	}
}

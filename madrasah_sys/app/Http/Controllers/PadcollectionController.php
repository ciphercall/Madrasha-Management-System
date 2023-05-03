<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Padcollection;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class PadcollectionController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$padcollections=Padcollection::paginate(10);
		return view("pages.erp.padcollection.index_padcollection",["padcollections"=>$padcollections,"brunchs"=>$brunchs]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.padcollection.create_padcollection",["brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Padcollection::create($request->all());
		$padcollection=new Padcollection;
		$padcollection->brunch_id=$request->cmbBrunchId;
		$padcollection->brunch_name=$request->txtBrunch_name;
		$padcollection->date=$request->txtDate;
		$padcollection->page_no=$request->txtPage_no;
		$padcollection->pad_collection=$request->txtPad_collection;
		$padcollection->provider=$request->txtProvider;
		$padcollection->comment=$request->txtComment;
		$padcollection->deleted_at=$request->txtDeleted_at;

		$padcollection->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$spadcollection=Padcollection::find($id);
		return response()->json([
			'status'=>200,
			'spadcollection'=>$spadcollection
		]);
	}
	public function edit($id){
		$padcollection=Padcollection::find($id);
		return response()->json([
			'status'=>200,
			'padcollection'=>$padcollection
		]);
	}

	
	public function update(Request $request){
//		$padcollection->update($request->all());
		$padcollectionid=$request->input('cmbpadcId');

		$padcollection = Padcollection::find($padcollectionid);
		$padcollection->id=$request->cmbpadcId;
		$padcollection->brunch_id=$request->cmbBrunchId;
		$padcollection->brunch_name=$request->txtBrunch_name;
		$padcollection->date=$request->txtDate;
		$padcollection->page_no=$request->txtPage_no;
		$padcollection->pad_collection=$request->txtPad_collection;
		$padcollection->provider=$request->txtProvider;
		$padcollection->comment=$request->txtComment;
		$padcollection->deleted_at=$request->txtDeleted_at;

		$padcollection->update();
		return redirect()->route("padcollections.index")->with('success','Updated Successfully.');
    
	}
	public function destroy(Request $request){
		
		$padcollectionid=$request->input('d_padc');
		$padcollection= Padcollection::find($padcollectionid);
		$padcollection->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

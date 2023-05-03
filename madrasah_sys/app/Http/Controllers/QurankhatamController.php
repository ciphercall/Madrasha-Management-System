<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Qurankhatam;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class QurankhatamController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$qurankhatams=Qurankhatam::paginate(10);
		return view("pages.erp.qurankhatam.index_qurankhatam",["qurankhatams"=>$qurankhatams,"brunchs"=>$brunchs]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.qurankhatam.create_qurankhatam",["brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Qurankhatam::create($request->all());
		$qurankhatam=new Qurankhatam;
		$qurankhatam->brunch_id=$request->cmbBrunchId;
		$qurankhatam->brunch_name=$request->txtBrunch_name;
		$qurankhatam->studid=$request->txtStudid;
		$qurankhatam->date=$request->txtDate;
		$qurankhatam->name=$request->txtName;
		$qurankhatam->email=$request->txtEmail;
		$qurankhatam->phone=$request->txtPhone;
		$qurankhatam->amount=$request->txtAmount;
		$qurankhatam->occasion=$request->txtOccasion;
		$qurankhatam->comment=$request->txtComment;
		$qurankhatam->deleted_at=$request->txtDeleted_at;

		$qurankhatam->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$squrankhatam=Qurankhatam::find($id);
		return response()->json([
			'status'=>200,
			'squrankhatam'=>$squrankhatam
		]);
	}
	// public function edit(Qurankhatam $qurankhatam){
	// 	$brunchs=Brunch::all();

	// 	return view("pages.erp.qurankhatam.edit_qurankhatam",["qurankhatam"=>$qurankhatam,"brunchs"=>$brunchs]);
	// }
	public function edit($id){
		$qurankhatam=Qurankhatam::find($id);
		return response()->json([
			'status'=>200,
			'qurankhatam'=>$qurankhatam
		]);
	}
	public function update(Request $request){
//		$qurankhatam->update($request->all());
		$qurankhatamid=$request->input('cmbquId');

		$qurankhatam = Qurankhatam::find($qurankhatamid);
		$qurankhatam->id=$request->cmbquId;

		$qurankhatam->brunch_id=$request->cmbBrunchId;
		$qurankhatam->brunch_name=$request->txtBrunch_name;
		$qurankhatam->studid=$request->txtStudid;
		$qurankhatam->date=$request->txtDate;
		$qurankhatam->name=$request->txtName;
		$qurankhatam->email=$request->txtEmail;
		$qurankhatam->phone=$request->txtPhone;
		$qurankhatam->amount=$request->txtAmount;
		$qurankhatam->occasion=$request->txtOccasion;
		$qurankhatam->comment=$request->txtComment;
		$qurankhatam->deleted_at=$request->txtDeleted_at;

		$qurankhatam->update();
		return redirect()->route("qurankhatams.index")->with('success','Updated Successfully.');
    
	}
	// public function destroy(Qurankhatam $qurankhatam){
	// 	$qurankhatam->delete();
	// 	return redirect()->route("qurankhatams.index")->with('success','Deleted Successfully.');
	// }



		public function destroy(Request $request){
		
		$qurankhatamid=$request->input('d_qu');
		$qurankhatam= qurankhatam::find($qurankhatamid);
		$qurankhatam->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

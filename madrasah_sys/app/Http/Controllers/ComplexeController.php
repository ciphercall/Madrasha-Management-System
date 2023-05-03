<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Complexe;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ComplexeController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$complexes=Complexe::paginate(10);
		return view("pages.erp.complexe.index_complexe",["complexes"=>$complexes,"brunchs"=>$brunchs]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.complexe.create_complexe",["brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Complexe::create($request->all());
		$complexe=new Complexe;
		$complexe->brunch_id=$request->cmbBrunchId;
		$complexe->brunch_name=$request->txtBrunch_name;
		$complexe->withdrawal_date=$request->txtWithdrawal_date;
		$complexe->receiver_name=$request->txtReceiver_name;
		$complexe->receipt_no=$request->txtReceipt_no;
		$complexe->address=$request->txtAddress;
		$complexe->received_amount=$request->txtReceived_amount;
		$complexe->comment=$request->txtComment;
		$complexe->deleted_at=$request->txtDeleted_at;

		$complexe->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$scomplexe=Complexe::find($id);
		return response()->json([
			'status'=>200,
			'scomplexe'=>$scomplexe
		]);
	}
	public function edit($id){
		$complexe=Complexe::find($id);
		return response()->json([
			'status'=>200,
			'complexe'=>$complexe
		]);
	}
	public function update(Request $request,Complexe $complexe){
//		$complexe->update($request->all());
		$complexeid=$request->input('cmbcomId');

		$complexe = Complexe::find($complexeid);
		$complexe->id=$request->cmbcomId;
		$complexe->brunch_id=$request->cmbBrunchId;
		$complexe->brunch_name=$request->txtBrunch_name;
		$complexe->withdrawal_date=$request->txtWithdrawal_date;
		$complexe->receiver_name=$request->txtReceiver_name;
		$complexe->receipt_no=$request->txtReceipt_no;
		$complexe->address=$request->txtAddress;
		$complexe->received_amount=$request->txtReceived_amount;
		$complexe->comment=$request->txtComment;
		$complexe->deleted_at=$request->txtDeleted_at;

		$complexe->update();
		return redirect()->route("complexes.index")->with('success','Updated Successfully.');
    
	}


	public function destroy(Request $request){
		
		$complexeid=$request->input('d_com');
		$complexe= Complexe::find($complexeid);
		$complexe->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

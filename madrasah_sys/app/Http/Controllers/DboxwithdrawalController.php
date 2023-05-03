<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Dboxwithdrawal;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class DboxwithdrawalController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$dboxwithdrawals=Dboxwithdrawal::paginate(10);
		return view("pages.erp.dboxwithdrawal.index_dboxwithdrawal",["dboxwithdrawals"=>$dboxwithdrawals,"brunchs"=>$brunchs]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.dboxwithdrawal.create_dboxwithdrawal",["brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Dboxwithdrawal::create($request->all());
		$dboxwithdrawal=new Dboxwithdrawal;
		$dboxwithdrawal->brunch_id=$request->cmbBrunchId;
		$dboxwithdrawal->brunch_name=$request->txtBrunch_name;
		$dboxwithdrawal->withdrawal_date=$request->txtWithdrawal_date;
		$dboxwithdrawal->receiver_name=$request->txtReceiver_name;
		$dboxwithdrawal->receipt_no=$request->txtReceipt_no;
		$dboxwithdrawal->address=$request->txtAddress;
		$dboxwithdrawal->received_amount=$request->txtReceived_amount;
		$dboxwithdrawal->box_no=$request->txtBox_no;
		$dboxwithdrawal->comment=$request->txtComment;
		$dboxwithdrawal->deleted_at=$request->txtDeleted_at;

		$dboxwithdrawal->save();
		return back()->with('success','Created Successfully.');
  
	}
	
	public function show($id){
		$sdboxwithdrawal=Dboxwithdrawal::find($id);
		return response()->json([
			'status'=>200,
			'sdboxwithdrawal'=>$sdboxwithdrawal
		]);
	}

	public function edit($id){
		$dboxwithdrawal=Dboxwithdrawal::find($id);
		return response()->json([
			'status'=>200,
			'dboxwithdrawal'=>$dboxwithdrawal
		]);
	}

	public function update(Request $request){
		$dboxwithdrawal_id=$request->input('cmbdbId');

		$dboxwithdrawal = Dboxwithdrawal::find($dboxwithdrawal_id);

		// $dboxwithdrawal=new Dboxwithdrawal;
		$dboxwithdrawal->id=$request->cmbdbId;
		$dboxwithdrawal->brunch_id=$request->cmbBrunchId;
		$dboxwithdrawal->brunch_name=$request->txtBrunch_name;
		$dboxwithdrawal->withdrawal_date=$request->txtWithdrawal_date;
		$dboxwithdrawal->receiver_name=$request->txtReceiver_name;
		$dboxwithdrawal->receipt_no=$request->txtReceipt_no;
		$dboxwithdrawal->address=$request->txtAddress;
		$dboxwithdrawal->received_amount=$request->txtReceived_amount;
		$dboxwithdrawal->box_no=$request->txtBox_no;
		$dboxwithdrawal->comment=$request->txtComment;
		$dboxwithdrawal->deleted_at=$request->txtDeleted_at;

		$dboxwithdrawal->update();
		return redirect()->route("dboxwithdrawals.index")->with('success','Updated Successfully.');
    
	}
	// public function destroy(Dboxwithdrawal $dboxwithdrawal){
	// 	$dboxwithdrawal->delete();
	// 	return redirect()->route("dboxwithdrawals.index")->with('success','Deleted Successfully.');
	// }
	public function destroy(Request $request){
		
		$dboxwithdrawal_id=$request->input('d_db');
		$Dboxwithdrawal= Dboxwithdrawal::find($dboxwithdrawal_id);
		$Dboxwithdrawal->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

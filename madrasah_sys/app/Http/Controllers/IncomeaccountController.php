<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Incomeaccount;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class IncomeaccountController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$incomeaccounts=Incomeaccount::paginate(10);
		return view("pages.erp.incomeaccount.index_incomeaccount",["incomeaccounts"=>$incomeaccounts,"brunchs"=>$brunchs]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.incomeaccount.create_incomeaccount",["brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Incomeaccount::create($request->all());
		$incomeaccount=new Incomeaccount;
		$incomeaccount->brunch_id=$request->cmbBrunchId;
		$incomeaccount->brunch_name=$request->txtBrunch_name;
		$incomeaccount->date=$request->txtDate;
		$incomeaccount->money_receipt_no=$request->txtMoney_receipt_no;
		$incomeaccount->description=$request->txtDescription;
		$incomeaccount->amount_money=$request->txtAmount_money;
		$incomeaccount->comment=$request->txtComment;
		$incomeaccount->deleted_at=$request->txtDeleted_at;

		$incomeaccount->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$sincomeaccount=Incomeaccount::find($id);
		return response()->json([
			'status'=>200,
			'sincomeaccount'=>$sincomeaccount
		]);
	}
	public function edit($id){
		$incomeaccount=Incomeaccount::find($id);
		return response()->json([
			'status'=>200,
			'incomeaccount'=>$incomeaccount
		]);
	}
	public function update(Request $request){
		
		$incomeaccountid=$request->input('cmbincId');

		$incomeaccount = Incomeaccount::find($incomeaccountid);
		$incomeaccount->id=$request->cmbincId;
		$incomeaccount->brunch_id=$request->cmbBrunchId;
		$incomeaccount->brunch_name=$request->txtBrunch_name;
		$incomeaccount->date=$request->txtDate;
		$incomeaccount->money_receipt_no=$request->txtMoney_receipt_no;
		$incomeaccount->description=$request->txtDescription;
		$incomeaccount->amount_money=$request->txtAmount_money;
		$incomeaccount->comment=$request->txtComment;
		$incomeaccount->deleted_at=$request->txtDeleted_at;

		$incomeaccount->update();
		return redirect()->route("incomeaccounts.index")->with('success','Updated Successfully.');
    
	}


	public function destroy(Request $request){
		
		$incomeaccountid=$request->input('d_inc');
		$incomeaccount= Incomeaccount::find($incomeaccountid);
		$incomeaccount->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

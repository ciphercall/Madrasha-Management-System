<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Expenseaccount;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ExpenseaccountController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$expenseaccounts=Expenseaccount::paginate(10);
		return view("pages.erp.expenseaccount.index_expenseaccount",["expenseaccounts"=>$expenseaccounts,"brunchs"=>$brunchs]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.expenseaccount.create_expenseaccount",["brunchs"=>$brunchs]);
	}


	public function store(Request $request){
//		Expenseaccount::create($request->all());
		$expenseaccount=new Expenseaccount;
		$expenseaccount->brunch_id=$request->cmbBrunchId;
		$expenseaccount->brunch_name=$request->txtBrunch_name;
		$expenseaccount->date=$request->txtDate;
		$expenseaccount->receipt_no=$request->txtReceipt_no;
		$expenseaccount->description=$request->txtDescription;
		$expenseaccount->amount_money=$request->txtAmount_money;
		$expenseaccount->comment=$request->txtComment;
		$expenseaccount->deleted_at=$request->txtDeleted_at;

		$expenseaccount->save();
		return back()->with('success','Created Successfully.');
  
	}


	public function show($id){
		$sexpenseaccount=Expenseaccount::find($id);
		return response()->json([
			'status'=>200,
			'sexpenseaccount'=>$sexpenseaccount
		]);
	}


	public function edit($id){
		$expenseaccount=Expenseaccount::find($id);
		return response()->json([
			'status'=>200,
			'expenseaccount'=>$expenseaccount
		]);
	}


	public function update(Request $request){
//		$expenseaccount->update($request->all());
		$expenseaccountid=$request->input('cmbexId');

		$expenseaccount = Expenseaccount::find($expenseaccountid);
		$expenseaccount->id=$request->cmbexId;
		$expenseaccount->brunch_id=$request->cmbBrunchId;
		$expenseaccount->brunch_name=$request->txtBrunch_name;
		$expenseaccount->date=$request->txtDate;
		$expenseaccount->receipt_no=$request->txtReceipt_no;
		$expenseaccount->description=$request->txtDescription;
		$expenseaccount->amount_money=$request->txtAmount_money;
		$expenseaccount->comment=$request->txtComment;
		$expenseaccount->deleted_at=$request->txtDeleted_at;

		$expenseaccount->update();
		return redirect()->route("expenseaccounts.index")->with('success','Updated Successfully.');
    
	}


	public function destroy(Request $request){
		
		$expenseaccountid=$request->input('d_ex');
		$expenseaccount= Expenseaccount::find($expenseaccountid);
		$expenseaccount->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

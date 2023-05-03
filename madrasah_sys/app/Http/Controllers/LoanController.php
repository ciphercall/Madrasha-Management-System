<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Brunch;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class LoanController extends Controller{

	public function index(){
		$brunchs=Brunch::all();


		$loans=Loan::paginate(10);
		return view("pages.erp.loan.index_loan",["brunchs"=>$brunchs,"loans"=>$loans]);
	}
	public function create(){
		$brunchs=Brunch::all();
		$members=Member::all();
		 
		return view("pages.erp.loan.create_loan",["brunchs "=>$brunchs,"members"=>$members]);
	}
	public function store(Request $request){
//		Loan::create($request->all());
		$loan=new Loan;
		$loan->brunch_id=$request->cmbBrunchId;
		$loan->brunch_name=$request->txtBrunch_name;
		$loan->member_id=$request->cmbMemberId;
		$loan->member_name=$request->txtMember_name;
		$loan->date=$request->txtDate;
		$loan->deg=$request->txtDeg;
		$loan->loan_amount=$request->txtLoan_amount;
		$loan->paid=$request->txtPaid;
		$loan->comment=$request->txtComment;

		$loan->deleted_at=$request->txtDeleted_at;

		$loan->save();
		return back()->with('success','Created Successfully.');
  
	}

	public function show($id){
		$sloan=Loan::find($id);
		return response()->json([
			'status'=>200,
			'sloan'=>$sloan
		]);
	}

	public function edit($id){
		$loan=Loan::find($id);
		return response()->json([
			'status'=>200,
			'loan'=>$loan
		]);
	}
	public function update(Request $request){
//		$loan->update($request->all());
			$loanid=$request->input('cmbloanId');

			$loan = Loan::find($loanid);
			$loan->id=$request->cmbloanrId;
		$loan->brunch_id=$request->cmbBrunchId;
		$loan->brunch_name=$request->txtBrunch_name;
		$loan->member_id=$request->cmbMemberId;
		$loan->member_name=$request->txtMember_name;
		$loan->date=$request->txtDate;
		$loan->deg=$request->txtDeg;
		$loan->loan_amount=$request->txtLoan_amount;
		$loan->paid=$request->txtPaid;
		$loan->comment=$request->txtComment;

		$loan->deleted_at=$request->txtDeleted_at;

		$loan->update();
		return redirect()->route("loans.index")->with('success','Updated Successfully.');
    
	}
	


	public function destroy(Request $request){
		
		$loanid=$request->input('d_loan');
		$loan= Loan::find($loanid);
		$loan->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

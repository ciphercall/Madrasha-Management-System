<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Incomeexp;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class IncomeexpController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$incomeexps=Incomeexp::paginate(10);
		return view("pages.erp.incomeexp.index_incomeexp",["brunchs"=>$brunchs,"incomeexps"=>$incomeexps]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.incomeexp.create_incomeexp",["brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Incomeexp::create($request->all());
		$incomeexp=new Incomeexp;
		$incomeexp->brunch_id=$request->cmbBrunchId;
		$incomeexp->brunch_name=$request->txtBrunch_name;
		$incomeexp->e_date=$request->txtE_date;
		$incomeexp->income=$request->txtIncome;
		$incomeexp->expanse=$request->txtExpanse;
		$incomeexp->comment=$request->txtComment;
		$incomeexp->deleted_at=$request->txtDeleted_at;

		$incomeexp->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$sincomeexp=Incomeexp::find($id);
		return response()->json([
			'status'=>200,
			'sincomeexp'=>$sincomeexp
		]);
	}
	public function edit($id){
		$incomeexp=Incomeexp::find($id);
		return response()->json([
			'status'=>200,
			'incomeexp'=>$incomeexp
		]);
	}

	public function update(Request $request){
//		$incomeexp->update($request->all());
		$incomeexpid=$request->input('cmbincomeexpId');

		$incomeexp = Incomeexp::find($incomeexpid);
		$incomeexp->id=$request->cmbincomeexpId;
		$incomeexp->brunch_id=$request->cmbBrunchId;
		$incomeexp->brunch_name=$request->txtBrunch_name;
		$incomeexp->e_date=$request->txtE_date;
		$incomeexp->income=$request->txtIncome;
		$incomeexp->expanse=$request->txtExpanse;

		$incomeexp->comment=$request->txtComment;
		$incomeexp->deleted_at=$request->txtDeleted_at;

		$incomeexp->update();
		return redirect()->route("incomeexps.index")->with('success','Updated Successfully.');
    
	}

	public function destroy(Request $request){
		
		$incomeexpid=$request->input('d_incomeexp');
		$incomeexp= Incomeexp::find($incomeexpid);
		$incomeexp->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

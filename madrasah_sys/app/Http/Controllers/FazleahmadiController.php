<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Fazleahmadi;
use App\Models\Member;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class FazleahmadiController extends Controller{

	public function index(){
		$members=Member::all();

		$brunchs=Brunch::all();
		
		$fazleahmadis=Fazleahmadi::paginate(10);
		return view("pages.erp.fazleahmadi.index_fazleahmadi",["fazleahmadis"=>$fazleahmadis,"brunchs"=>$brunchs,"members"=>$members]);
	}



	public function create(){
		$members=Member::all();
		$brunchs=Brunch::all();

		return view("pages.erp.fazleahmadi.create_fazleahmadi",["members"=>$members,"brunchs"=>$brunchs]);
	}




	public function store(Request $request){
//		Fazleahmadi::create($request->all());
		$fazleahmadi=new Fazleahmadi;
		$fazleahmadi->member_id=$request->cmbMemberId;
		$fazleahmadi->member_name=$request->txtMember_name;
		$fazleahmadi->phone=$request->txtPhone;
		$fazleahmadi->brunch_id=$request->cmbBrunchId;
		$fazleahmadi->brunch_name=$request->txtBrunch_name;
		$fazleahmadi->member_category=$request->txtMember_category;
		$fazleahmadi->designation=$request->txtDesignation;
		$fazleahmadi->date=$request->txtDate;
		$fazleahmadi->edition_no_to=$request->txtEdition_no_to;
		$fazleahmadi->edition_no_from=$request->txtEdition_no_from;
		$fazleahmadi->received_amount=$request->txtReceived_amount;
		$fazleahmadi->money_receipt_no=$request->txtMoney_receipt_no;
		$fazleahmadi->edition_delivery=$request->txtEdition_delivery;
		$fazleahmadi->deleted_at=$request->txtDeleted_at;

		$fazleahmadi->save();
		return back()->with('success','Created Successfully.');
  
	}



	public function show($id){
		$sfazleahmadi=Fazleahmadi::find($id);
		return response()->json([
			'status'=>200,
			'sfazleahmadi'=>$sfazleahmadi
		]);
	}



	public function edit($id){
		$fazleahmadi=Fazleahmadi::find($id);
		return response()->json([
			'status'=>200,
			'fazleahmadi'=>$fazleahmadi
		]);
	}


	public function update(Request $request){
//		$fazleahmadi->update($request->all());
		$fazleahmadiid=$request->input('cmbfazId');

		$fazleahmadi = Fazleahmadi::find($fazleahmadiid);
		$fazleahmadi->id=$request->cmbdepId;
		$fazleahmadi->member_id=$request->cmbMemberId;
		$fazleahmadi->member_name=$request->txtMember_name;
		$fazleahmadi->phone=$request->txtPhone;
		$fazleahmadi->brunch_id=$request->cmbBrunchId;
		$fazleahmadi->brunch_name=$request->txtBrunch_name;
		$fazleahmadi->member_category=$request->txtMember_category;
		$fazleahmadi->designation=$request->txtDesignation;
		$fazleahmadi->date=$request->txtDate;
		$fazleahmadi->edition_no_to=$request->txtEdition_no_to;
		$fazleahmadi->edition_no_from=$request->txtEdition_no_from;
		$fazleahmadi->received_amount=$request->txtReceived_amount;
		$fazleahmadi->money_receipt_no=$request->txtMoney_receipt_no;
		$fazleahmadi->edition_delivery=$request->txtEdition_delivery;
		$fazleahmadi->deleted_at=$request->txtDeleted_at;

		$fazleahmadi->update();
		return redirect()->route("fazleahmadis.index")->with('success','Updated Successfully.');
    
	}
	public function destroy(Request $request){
		
		$fazleahmadiid=$request->input('d_dep');
		$fazleahmadi= Fazleahmadi::find($fazleahmadiid);
		$fazleahmadi->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

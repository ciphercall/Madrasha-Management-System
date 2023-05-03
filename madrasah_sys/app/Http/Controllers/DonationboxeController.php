<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Donationboxe;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class DonationboxeController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$donationboxes=Donationboxe::paginate(10);
		return view("pages.erp.donationboxe.index_donationboxe",["donationboxes"=>$donationboxes,"brunchs"=>$brunchs]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.donationboxe.create_donationboxe",["brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Donationboxe::create($request->all());
		$donationboxe=new Donationboxe;
		$donationboxe->brunch_id=$request->cmbBrunchId;
		$donationboxe->brunch_name=$request->txtBrunch_name;
		$donationboxe->category=$request->txtCategory;
		$donationboxe->date=$request->txtDate;
		$donationboxe->receiver_name=$request->txtReceiver_name;
		$donationboxe->address=$request->txtAddress;
		$donationboxe->box_no=$request->txtBox_no;
		$donationboxe->phone=$request->txtPhone;
		$donationboxe->provider_name=$request->txtProvider_name;
		$donationboxe->comment=$request->txtComment;
		$donationboxe->deleted_at=$request->txtDeleted_at;

		$donationboxe->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$donationboxe=Donationboxe::find($id);
		return view("pages.erp.donationboxe.show_donationboxe",["donationboxe"=>$donationboxe]);
	}
	public function edit($id){
		$donationboxe=Donationboxe::find($id);
		return response()->json([
			'status'=>200,
			'donationboxe'=>$donationboxe
		]);
	}

	public function update(Request $request){
//		$donationboxe->update($request->all());
		$donationboxeid=$request->input('cmbdonId');

		$donationboxe = Donationboxe::find($donationboxeid);
		$donationboxe->id=$request->cmbdonId;

		$donationboxe->brunch_id=$request->cmbBrunchId;
		$donationboxe->brunch_name=$request->txtBrunch_name;
		$donationboxe->category=$request->txtCategory;
		$donationboxe->date=$request->txtDate;
		$donationboxe->receiver_name=$request->txtReceiver_name;
		$donationboxe->address=$request->txtAddress;
		$donationboxe->box_no=$request->txtBox_no;
		$donationboxe->phone=$request->txtPhone;
		$donationboxe->provider_name=$request->txtProvider_name;
		$donationboxe->comment=$request->txtComment;
		$donationboxe->deleted_at=$request->txtDeleted_at;

		$donationboxe->update();
		return redirect()->route("donationboxes.index")->with('success','Updated Successfully.');
    
	}


	public function destroy(Request $request){
		
		$donationboxeid=$request->input('d_don');
		$donationboxe= Donationboxe::find($donationboxeid);
		$donationboxe->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Invitation;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class InvitationController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$invitations=Invitation::paginate(10);
		return view("pages.erp.invitation.index_invitation",["invitations"=>$invitations,"brunchs"=>$brunchs]);
	
	
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.invitation.create_invitation",["brunchs"=>$brunchs]);
	}


	public function store(Request $request){
//		Invitation::create($request->all());
		$invitation=new Invitation;
		$invitation->brunch_id=$request->cmbBrunchId;
		$invitation->brunch_name=$request->txtBrunch_name;
		$invitation->studid=$request->txtStudid;
		$invitation->date=$request->txtDate;
		$invitation->name=$request->txtName;
		$invitation->email=$request->txtEmail;
		$invitation->phone=$request->txtPhone;
		$invitation->amount=$request->txtAmount;
		$invitation->occasion=$request->txtOccasion;
		$invitation->comment=$request->txtComment;
		$invitation->deleted_at=$request->txtDeleted_at;

		$invitation->save();
		return back()->with('success','Created Successfully.');
  
	}



	public function show($id){
		$sinvitation=Invitation::find($id);
		return response()->json([
			'status'=>200,
			'sinvitation'=>$sinvitation
		]);
	}



	public function edit($id){
		$invitation=Invitation::find($id);
		return response()->json([
			'status'=>200,
			'invitation'=>$invitation
		]);
	}

	public function update(Request $request){
//		$invitation->update($request->all());
		$Invitationid=$request->input('cmbinviId');

		$invitation = Invitation::find($Invitationid);
		$invitation->id=$request->cmbinviId;
		$invitation->brunch_id=$request->cmbBrunchId;
		$invitation->brunch_name=$request->txtBrunch_name;
		$invitation->studid=$request->txtStudid;
		$invitation->date=$request->txtDate;
		$invitation->name=$request->txtName;
		$invitation->email=$request->txtEmail;
		$invitation->phone=$request->txtPhone;
		$invitation->amount=$request->txtAmount;
		$invitation->occasion=$request->txtOccasion;
		$invitation->comment=$request->txtComment;
		$invitation->deleted_at=$request->txtDeleted_at;

		$invitation->update();
		return redirect()->route("invitations.index")->with('success','Updated Successfully.');
    
	}
	
	public function destroy(Request $request){
		
		$Invitationid=$request->input('d_invi');
		$Invitation= Invitation::find($Invitationid);
		$Invitation->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

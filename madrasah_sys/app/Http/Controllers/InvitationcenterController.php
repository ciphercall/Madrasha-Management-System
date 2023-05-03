<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Invitationcenter;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class InvitationcenterController extends Controller{

	public function index(){
		$brunch=Brunch::all();

		$invitationcenters=Invitationcenter::paginate(10);
		return view("pages.erp.invitationcenter.index_invitationcenter",["invitationcenters"=>$invitationcenters,"brunchs"=>$brunch]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.invitationcenter.create_invitationcenter",["brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Invitationcenter::create($request->all());
		$invitationcenter=new Invitationcenter;
		$invitationcenter->brunch_id=$request->cmbBrunchId;
		$invitationcenter->brunch_name=$request->txtBrunch_name;
		$invitationcenter->date=$request->txtDate;
		$invitationcenter->tahlil=$request->txtTahlil;
		$invitationcenter->doa_yunus=$request->txtDoa_yunus;
		$invitationcenter->darude_saifillah=$request->txtDarude_saifillah;
		$invitationcenter->darude_nariya=$request->txtDarude_nariya;
		$invitationcenter->quran_katom=$request->txtQuran_katom;
		$invitationcenter->occasion=$request->txtOccasion;
		$invitationcenter->comment=$request->txtComment;
		$invitationcenter->deleted_at=$request->txtDeleted_at;

		$invitationcenter->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$sinvitationcenter=Invitationcenter::find($id);
		return response()->json([
			'status'=>200,
			'sinvitationcenter'=>$sinvitationcenter
		]);
	}

	// public function edit(Invitationcenter $invitationcenter){
	// 	$brunchs=Brunch::all();

	// 	return view("pages.erp.invitationcenter.edit_invitationcenter",["invitationcenter"=>$invitationcenter,"brunchs"=>$brunchs]);
	// }

	public function edit($id){
		$invitationcenter=Invitationcenter::find($id);
		return response()->json([
			'status'=>200,
			'invitationcenter'=>$invitationcenter
		]);
	}
	public function update(Request $request){
//		$invitationcenter->update($request->all());
		$invitationcenter_id=$request->input('cmbinId');

		$invitationcenter = Invitationcenter::find($invitationcenter_id);

		
		$invitationcenter->id=$request->cmbinId;
		$invitationcenter->brunch_id=$request->cmbBrunchId;
		$invitationcenter->brunch_name=$request->txtBrunch_name;
		$invitationcenter->date=$request->txtDate;
		$invitationcenter->tahlil=$request->txtTahlil;
		$invitationcenter->doa_yunus=$request->txtDoa_yunus;
		$invitationcenter->darude_saifillah=$request->txtDarude_saifillah;
		$invitationcenter->darude_nariya=$request->txtDarude_nariya;
		$invitationcenter->quran_katom=$request->txtQuran_katom;
		$invitationcenter->occasion=$request->txtOccasion;
		$invitationcenter->comment=$request->txtComment;
		$invitationcenter->deleted_at=$request->txtDeleted_at;

		$invitationcenter->update();
		return redirect()->route("invitationcenters.index")->with('success','Updated Successfully.');
    
	}
	// public function destroy(Invitationcenter $invitationcenter){
	// 	$invitationcenter->delete();
	// 	return redirect()->route("invitationcenters.index")->with('success','Deleted Successfully.');
	// }

	public function destroy(Request $request){
		
		$invitationcenter_id=$request->input('d_inv');
		$invitationcenter= Invitationcenter::find($invitationcenter_id);
		$invitationcenter->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

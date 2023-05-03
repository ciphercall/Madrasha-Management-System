<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Chamra;
use App\Models\Brunch;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ChamraController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$chamras=Chamra::paginate(10);
		return view("pages.erp.chamra.index_chamra",["brunchs"=>$brunchs,"chamras"=>$chamras]);
	}
	public function create(){
		$brunchs=Brunch::all();
		$mambers=Member::all();

		return view("pages.erp.chamra.create_chamra",["brunchs"=>$brunchs,"mambers"=>$mambers]);
	}
	public function store(Request $request){
//		Chamra::create($request->all());
		$chamra=new Chamra;
		$chamra->brunch_id=$request->cmbBrunchId;
		$chamra->brunche_name=$request->txtBrunche_name;
		$chamra->mamber_id=$request->cmbMamberId;
		$chamra->member_name=$request->txtMember_name;
		$chamra->date=$request->txtDate;
		$chamra->donar_name=$request->txtDonar_name;
		$chamra->category=$request->txtCategory;
		$chamra->animale=$request->txtAnimale;
		$chamra->medium=$request->txtMedium;
		$chamra->qty=$request->txtQty;
		$chamra->comment=$request->txtComment;

		$chamra->deleted_at=$request->txtDeleted_at;

		$chamra->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$schamra=Chamra::find($id);
		return response()->json([
			'status'=>200,
			'schamra'=>$schamra
		]);
	}
	public function edit($id){
		$chamra=Chamra::find($id);
		return response()->json([
			'status'=>200,
			'chamra'=>$chamra
		]);
	}


	
	public function update(Request $request){
//		$chamra->update($request->all());
			$chamraid=$request->input('cmbchamraId');

			$chamra = Chamra::find($chamraid);
			$chamra->id=$request->cmbchamraId;
		$chamra->brunch_id=$request->cmbBrunchId;
		$chamra->brunche_name=$request->txtBrunche_name;
		$chamra->mamber_id=$request->cmbMamberId;
		$chamra->member_name=$request->txtMember_name;
		$chamra->date=$request->txtDate;
		$chamra->donar_name=$request->txtDonar_name;
		$chamra->category=$request->txtCategory;
		$chamra->animale=$request->txtAnimale;
		$chamra->medium=$request->txtMedium;
		$chamra->qty=$request->txtQty;
		$chamra->comment=$request->txtComment;

		$chamra->deleted_at=$request->txtDeleted_at;

		$chamra->update();
		return redirect()->route("chamras.index")->with('success','Updated Successfully.');
    
	}
	public function destroy(Request $request){
		
		$chamraid=$request->input('d_chamra');
		$chamra= Chamra::find($chamraid);
		$chamra->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

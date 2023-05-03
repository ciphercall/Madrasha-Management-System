<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class BrunchController extends Controller{

	public function index(){
		$brunches=Brunch::paginate(10);
		return view("pages.erp.brunche.index_brunche",["brunches"=>$brunches]);
	}
	public function create(){

		return view("pages.erp.brunche.create_brunche",[]);
	}
	public function store(Request $request){
//		Brunche::create($request->all());
		$brunche=new Brunch;
		$brunche->brunch_code=$request->txtBrunch_code;
		$brunche->brunch_name=$request->txtBrunch_name;
		$brunche->phone=$request->txtPhone;
		$brunche->email=$request->txtEmail;
		$brunche->address=$request->txtAddress;
		$brunche->brunch_head=$request->txtBrunch_head;
		$brunche->designation=$request->txtDesignation;
		$brunche->bg=$request->txtBg;
		$brunche->deleted_at=$request->txtDeleted_at;

		$brunche->save();
		return back()->with('success','Created Successfully.');
  
	}

	public function show($id){
		$sbrunche=Brunch::find($id);
		return response()->json([
			'status'=>200,
			'sbrunche'=>$sbrunche
		]);
	}

	public function edit($id){
		$brunche=Brunch::find($id);
		return response()->json([
			'status'=>200,
			'brunche'=>$brunche
		]);
	}

	public function update(Request $request){
//		$brunche->update($request->all());
		$bruncheid=$request->input('cmbbruId');

		$brunche = Brunch::find($bruncheid);
		$brunche->id=$request->cmbbruId;
		$brunche->brunch_code=$request->txtBrunch_code;
		$brunche->brunch_name=$request->txtBrunch_name;
		$brunche->phone=$request->txtPhone;
		$brunche->email=$request->txtEmail;
		$brunche->address=$request->txtAddress;
		$brunche->brunch_head=$request->txtBrunch_head;
		$brunche->designation=$request->txtDesignation;
		$brunche->bg=$request->txtBg;
		$brunche->deleted_at=$request->txtDeleted_at;

		$brunche->update();
		return redirect()->route("brunches.index")->with('success','Updated Successfully.');
    
	}


	public function destroy(Request $request){
		
		$bruncheid=$request->input('d_bru');
		$brunche= Brunch::find($bruncheid);
		$brunche->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
}

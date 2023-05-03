<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Mahfil;
use App\Models\Brunch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class MahfilController extends Controller{

	public function index(){
		$brunchs=Brunch::all();

		$mahfils=Mahfil::paginate(10);
		return view("pages.erp.mahfil.index_mahfil",["mahfils"=>$mahfils,"brunchs"=>$brunchs]);
	}
	public function create(){
		$brunchs=Brunch::all();

		return view("pages.erp.mahfil.create_mahfil",["brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Mahfil::create($request->all());
		$mahfil=new Mahfil;
		$mahfil->brunch_id=$request->cmbBrunchId;
		$mahfil->brunch_name=$request->txtBrunch_name;
		$mahfil->start_date=$request->txtStart_date;
		$mahfil->end_date=$request->txtEnd_date;
		$mahfil->start_time=$request->txtStart_time;
		$mahfil->end_time=$request->txtEnd_time;
		$mahfil->num_speakers=$request->txtNum_speakers;
		$mahfil->speakers=$request->txtSpeakers;
		$mahfil->occasion=$request->txtOccasion;
		$mahfil->address=$request->txtAddress;
		$mahfil->num_audience=$request->txtNum_audience;
		$mahfil->deleted_at=$request->txtDeleted_at;

		$mahfil->save();
		return back()->with('success','Created Successfully.');
  
	}
	// public function show($id){
	// 	$mahfil=Mahfil::find($id);
	// 	return view("pages.erp.mahfil.show_mahfil",["mahfil"=>$mahfil]);
	// }
	public function show($id){
		$smahfil=Mahfil::find($id);
		return response()->json([
			'status'=>200,
			'smahfil'=>$smahfil
		]);
	}
	public function edit($id){
		$mahfil=Mahfil::find($id);
		return response()->json([
			'status'=>200,
			'mahfil'=>$mahfil
		]);
	}
	public function update(Request $request){
//		$mahfil->update($request->all());
		$mahfilid=$request->input('cmbmahId');

		$mahfil = Mahfil::find($mahfilid);
		$mahfil->id=$request->cmbmahId;
		$mahfil->brunch_id=$request->cmbBrunchId;
		$mahfil->brunch_name=$request->txtBrunch_name;
		$mahfil->start_date=$request->txtStart_date;
		$mahfil->end_date=$request->txtEnd_date;
		$mahfil->start_time=$request->txtStart_time;
		$mahfil->end_time=$request->txtEnd_time;
		$mahfil->num_speakers=$request->txtNum_speakers;
		$mahfil->speakers=$request->txtSpeakers;
		$mahfil->occasion=$request->txtOccasion;
		$mahfil->address=$request->txtAddress;
		$mahfil->num_audience=$request->txtNum_audience;
		$mahfil->deleted_at=$request->txtDeleted_at;

		$mahfil->update();
		return redirect()->route("mahfils.index")->with('success','Updated Successfully.');
    
	}


public function destroy(Request $request){
		
		$mahfilid=$request->input('d_mah');
		$mahfil= Mahfil::find($mahfilid);
		$mahfil->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}

	public function get_brunch_json(){
        $id=$_GET["id"];
        // $px=DB::getTablePrefix();

        $request=DB::select("select * from brunches where id='$id'");
		// dd($request);
          return json_encode($request[0]);
     }
}

<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Volunteer;
use App\Models\Brunch;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Models\Occasion ;
use App\Models\Duty;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class VolunteerController extends Controller{

	public function index(){
		$brunchs=Brunch::all();
		$members=Member::all();
		$duty=Duty::all();
		$occa=Occasion::all();
		
		$volunteers=Volunteer::paginate(10);
		return view("pages.erp.volunteer.index_volunteer",["volunteers"=>$volunteers,"brunchs"=>$brunchs,"members"=>$members,"occasions"=>$occa,"dutys"=>$duty]);
	}
	public function create(){
		$brunchs=Brunch::all();
		$members=Member::all();

		return view("pages.erp.volunteer.create_volunteer",["brunchs"=>$brunchs,"members"=>$members]);
	}
	public function store(Request $request){
//		Volunteer::create($request->all());
		$volunteer=new Volunteer;
		$volunteer->brunch_id=$request->cmbBrunchId;
		$volunteer->brunch_name=$request->txtBrunch_name;
		$volunteer->member_id=$request->cmbMemberId;
		$volunteer->member_name=$request->txtMember_name;
		$volunteer->phone=$request->txtPhone;
		$volunteer->occasion=$request->txtOccasion;
		$volunteer->duty=$request->txtDuty;
		$volunteer->present_duty=$request->txtPresent_duty;
		$volunteer->previous_duty=$request->txtPrevious_duty;
		$volunteer->duty_date=$request->txtDuty_date;
		$volunteer->place=$request->txtPlace;
		$volunteer->comment=$request->txtComment;
		$volunteer->deleted_at=$request->txtDeleted_at;

		$volunteer->save();
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){
		$svolunteer=Volunteer::find($id);
		return response()->json([
			'status'=>200,
			'svolunteer'=>$svolunteer
		]);
	}
	public function edit($id){
		$volunteer=Volunteer::find($id);
		return response()->json([
			'status'=>200,
			'volunteer'=>$volunteer
		]);
	}


	
	public function update(Request $request){
//		$volunteer->update($request->all());
		$volunteerid=$request->input('cmbvolId');

		$volunteer = Volunteer::find($volunteerid);
		$volunteer->id=$request->cmbvolId;

		$volunteer->brunch_id=$request->cmbBrunchId;
		$volunteer->brunch_name=$request->txtBrunch_name;
		$volunteer->member_id=$request->cmbMemberId;
		$volunteer->member_name=$request->txtMember_name;
		$volunteer->phone=$request->txtPhone;
		$volunteer->occasion=$request->txtOccasion;
		$volunteer->duty=$request->txtDuty;
		$volunteer->present_duty=$request->txtPresent_duty;
		$volunteer->previous_duty=$request->txtPrevious_duty;
		$volunteer->duty_date=$request->txtDuty_date;
		$volunteer->place=$request->txtPlace;
		$volunteer->comment=$request->txtComment;
		$volunteer->deleted_at=$request->txtDeleted_at;

		$volunteer->update();
		return redirect()->route("volunteers.index")->with('success','Updated Successfully.');
    
	}
	public function destroy(Request $request){
		
		$volunteerid=$request->input('d_vol');
		$volunteer= Volunteer::find($volunteerid);
		$volunteer->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}

	public function get_volunteer_json(){
        $id=$_GET["id"];
        // $px=DB::getTablePrefix();

        $request=DB::select("select * from brunches where id='$id'");
		// dd($request);
          return json_encode($request[0]);
     }
}

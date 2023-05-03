<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Brunch;
use App\Models\Role;
use App\Models\Sobok;
use App\Models\Occasion ;
use App\Models\Designation ;



use App\Models\Workplace;

use App\Models\Duty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class MemberController extends Controller{

	public function index(){
		 $brunchs=Brunch::all();
		 $role=Role::all();
		 $duty=Duty::all();
		 $sok=Sobok::all();
		 $occa=Occasion::all();
		 $desi=Designation::all();


		 $workplace=Workplace::all();


		// $members=Member::paginate(10);
		// return view("pages.erp.member.index_member",["members"=>$members,"brunchs"=>$brunchs]);


		$members =DB::table('brunches')
                ->join('members','brunches.id', '=', 'members.brunch_id')
                ->select('brunches.brunch_code','brunches.brunch_name', 'members.*')
                ->get();
				//   dd($members);
		  return view("pages.erp.member.index_member",["members"=>$members,"brunchs"=>$brunchs,"workplaces"=>$workplace,"roles"=>$role,"dutys"=>$duty,"soboks"=>$sok,"occasions"=>$occa,"dutys"=>$duty,"designations"=>$desi]);

	}
	public function create(){
		$members=Member::all();
		$brunchs=Brunch::all();

		return view("pages.erp.member.create_member",["members"=>$members,"brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Member::create($request->all());
		$member=new Member;
		$member->id=$request->cmbMemberId;
		$member->name=$request->txtName;
		$member->phone=$request->txtPhone;
		$member->email=$request->txtEmail;
		$member->date_birth=$request->txtDate_birth;
		$member->father=$request->txtFather;
		$member->mother=$request->txtMother;
		$member->family_member=$request->txtFamily_member;
		$member->blood_group=$request->txtBlood_group;
		$member->gender=$request->txtGender;
		$member->eduction_type=$request->txtEduction_type;
		$member->education_skill=$request->txtEducation_skill;
		$member->occupation=$request->txtOccupation;
		$member->workplace=$request->txtWorkplace;
		$member->country=$request->txtCountry;
		$member->city=$request->txtCity;

		$member->presentadd=$request->txtPresentadd;
		$member->parmanentadd=$request->txtParmanentadd;
		$member->workplace_address=$request->txtWorkplace_address;
		$member->relationship=$request->txtRelationship;
		$member->nid=$request->txtNid;
		if(isset($request->filePhoto)){
		$member->photo=$request->filePhoto;
		}
		$member->torikot_date=$request->txtTorikot_date;
		$member->sobok_type=$request->txtSobok_type;
		$member->brunch_id=$request->cmbBrunchId;
		$member->brunch_name=$request->txtBrunch_name;
		$member->baiyat_date=$request->txtBaiyat_date;
		$member->donation_box_id=$request->cmbDonation_boxId;
		$member->occasion=$request->txtOccasion;
		$member->duty=$request->txtDuty;
		$member->designation=$request->txtDesignation;

		$member->deleted_at=$request->txtDeleted_at;


		$member->save();
		if(isset($request->filePhoto)){
			$imageName = time().'.'.$request->filePhoto->extension();
			$member->photo=$imageName;
			$member->update();
			$request->filePhoto->move(public_path('img'),$imageName);
		}
		return back()->with('success','Created Successfully.');
  
	}
	public function show($id){

		// $members =DB::table('brunches')
        //         ->join('members','brunches.id', '=', 'members.brunch_id')
		// 		->where('brunches.id',$id)
        //         ->select('members.photo','brunches.brunch_code','brunches.brunch_name' )
        //         ->get();
		 $members=Member::find($id);
		// dd($members);
		 return view("pages.erp.member.show_member",["member"=>$members]);
	}





public function edit($id){
	$member=Member::find($id);
	return response()->json([
		'status'=>200,
		'member'=>$member
	]);
}


	public function update(Request $request){
		$member_id=$request->input('cmbMemberId');

		$member = Member::find($member_id);

		$member->id=$request->cmbMemberId;
		$member->name=$request->txtName;
		$member->phone=$request->txtPhone;
		$member->email=$request->txtEmail;
		$member->date_birth=$request->txtDate_birth;
		$member->father=$request->txtFather;
		$member->mother=$request->txtMother;
		$member->family_member=$request->txtFamily_member;
		$member->blood_group=$request->txtBlood_group;
		$member->gender=$request->txtGender;
		$member->eduction_type=$request->txtEduction_type;
		$member->education_skill=$request->txtEducation_skill;
		$member->occupation=$request->txtOccupation;
		$member->workplace=$request->txtWorkplace;
		$member->country=$request->txtCountry;
		$member->city=$request->txtCity;

		$member->presentadd=$request->txtPresentadd;
		$member->parmanentadd=$request->txtParmanentadd;
		$member->workplace_address=$request->txtWorkplace_address;
		$member->relationship=$request->txtRelationship;
		$member->nid=$request->txtNid;
		if(isset($request->filePhoto)){
		$member->photo=$request->filePhoto;
		}
		$member->torikot_date=$request->txtTorikot_date;
		$member->sobok_type=$request->txtSobok_type;
		$member->brunch_id=$request->cmbBrunchId;
		$member->brunch_name=$request->txtBrunch_name;
        // $member->baiyat_date=date("d-m-Y",strtotime($request->txtBaiyat_date));


		$member->baiyat_date=$request->txtBaiyat_date;
		$member->donation_box_id=$request->cmbDonation_boxId;
		$member->occasion=$request->txtOccasion;
		$member->duty=$request->txtDuty;
		$member->deleted_at=$request->txtDeleted_at;

		if(isset($request->filePhoto)){
			$imageName =time().'.'.$request->filePhoto->extension();
			$member->photo=$imageName;
			$request->filePhoto->move(public_path('img'),$imageName);
		}
		$member->update();
		return redirect()->route("members.index")->with('success','Updated Successfully.');
    
	}

	public function destroy(Request $request){
		// dd($member->all());
		// $member->delete();
		// return redirect()->route("members.index")->with('success','Deleted Successfully.');
		$member_id=$request->input('d_member');
		$member= Member::find($member_id);
		$member->delete();


		// DB::table("members")->where("id", $id)->delete();
		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}
	
	public function tdestroy(Request $request){
		
		$tmember_id=$request->input('d_membert');
		$tmember= Member::find($tmember_id);
		$tmember->delete();


		// DB::table("members")->where("id", $id)->delete();
		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}

	public function member_list(){
		$brunchs=Brunch::all();
		 $role=Role::all();
		 $duty=Duty::all();
		 $sok=Sobok::all();
		 $occa=Occasion::all();
		 $desi=Designation::all();


		 $workplace=Workplace::all();

		$members=Member::paginate(10);
		return view("pages.erp.member.member_table",["members"=>$members,"brunchs"=>$brunchs,"workplaces"=>$workplace,"roles"=>$role,"dutys"=>$duty,"soboks"=>$sok,"occasions"=>$occa,"dutys"=>$duty,"designations"=>$desi]);
	}
}

<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Brunch;
use App\Models\Role;
use App\Models\Sobok;
use App\Models\Occasion ;
use App\Models\Designation ;

use App\Models\Guestmember ;


use App\Models\Workplace;

use App\Models\Duty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;


class GuestmemberController extends Controller{

	public function index(){
		  $brunchs=Brunch::all();
		 $role=Role::all();
		 $duty=Duty::all();
		 $sok=Sobok::all();
		 $occa=Occasion::all();
		 $desi=Designation::all();



		 $workplace=Workplace::all();


		 $gmember =DB::table('brunches')
		 ->join('guestmembers','brunches.id', '=', 'guestmembers.brunch_id')
		 ->select('brunches.brunch_code','brunches.brunch_name', 'guestmembers.*')
		 ->get();
		//    dd($gmembers);
		

		// $gmember = Brunch::join('guestmembers', 'brunches.id', '=', 'guestmembers.brunch_id')
		// ->get(['guestmembers.*', 'brunches.brunch_code']);

	
		   return view("pages.erp.guestmember.index_guestmember",["gmembers"=>$gmember,"brunchs"=>$brunchs,"workplaces"=>$workplace,"roles"=>$role,"dutys"=>$duty,"soboks"=>$sok,"occasions"=>$occa,"dutys"=>$duty,"designations"=>$desi]);

	}
	public function create(){
		$gmembers=Guestmember::all();
		$brunchs=Brunch::all();

		return view("pages.erp.guestmember.create_guestmember",["members"=>$gmembers,"brunchs"=>$brunchs]);
	}
	public function store(Request $request){
//		Member::create($request->all());
		$member=new Guestmember;
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
			$imageName = $member->id.'.'.$request->filePhoto->extension();
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
		 $members=Guestmember::find($id);
		// dd($members);
		 return view("pages.erp.guestmember.show_guestmember",["member"=>$members]);
	}
	// public function show($id){
	// 	$sguestmember=Guestmember::find($id);
	// 	return response()->json([
	// 		'status'=>200,
	// 		'sguestmember'=>$sguestmember
	// 	]);
	// }
	public function edit($id){
		$guestmember=Guestmember::find($id);
		return response()->json([
			'status'=>200,
			'guestmember'=>$guestmember
		]);
	}




	public function update(Request $request){
		//		$guestmember->update($request->all());
				$guestmemberid=$request->input('cmbgmemId');

				$guestmember = Guestmember::find($guestmemberid);
				$guestmember->id=$request->cmbgmemId;
				$guestmember->name=$request->txtName;
				$guestmember->phone=$request->txtPhone;
				$guestmember->email=$request->txtEmail;
				$guestmember->date_birth=$request->txtDate_birth;
				$guestmember->father=$request->txtFather;
				$guestmember->mother=$request->txtMother;
				$guestmember->family_member=$request->txtFamily_member;
				$guestmember->blood_group=$request->txtBlood_group;
				$guestmember->gender=$request->txtGender;
				$guestmember->eduction_type=$request->txtEduction_type;
				$guestmember->education_skill=$request->txtEducation_skill;
				$guestmember->occupation=$request->txtOccupation;
				$guestmember->workplace=$request->txtWorkplace;
				$guestmember->country=$request->txtCountry;
				$guestmember->presentadd=$request->txtPresentadd;
				$guestmember->parmanentadd=$request->txtParmanentadd;
				$guestmember->workplace_address=$request->txtWorkplace_address;
				$guestmember->relationship=$request->txtRelationship;
				$guestmember->nid=$request->txtNid;
				if(isset($request->filePhoto)){
				$guestmember->photo=$request->filePhoto;
				}
				$guestmember->torikot_date=$request->txtTorikot_date;
				$guestmember->sobok_type=$request->txtSobok_type;
				$guestmember->brunch_id=$request->cmbBrunchId;
				$guestmember->brunch_name=$request->txtBrunch_name;
				$guestmember->baiyat_date=$request->txtBaiyat_date;
				$guestmember->donation_box_id=$request->cmbDonation_boxId;
				$guestmember->occasion=$request->txtOccasion;
				$guestmember->duty=$request->txtDuty;
				$guestmember->deleted_at=$request->txtDeleted_at;
				$guestmember->designation=$request->txtDesignation;
				$guestmember->city=$request->txtCity;
				$guestmember->status=$request->txtStatus;
		
				if(isset($request->filePhoto)){
					$imageName = time().'.'.$request->filePhoto->extension();
					$guestmember->photo=$imageName;
					$request->filePhoto->move(public_path('img'),$imageName);
				}
				$guestmember->update();
				return redirect()->route("guestmembers.index")->with('success','Updated Successfully.');
			
			}

	// public function destroy( $id){
	// 	// dd(guestmember->all());
	// 	// guestmember->delete();
	// 	// return redirect()->route("members.index")->with('success','Deleted Successfully.');



	// 	DB::table("members")->where("id", $id)->delete();
	// 	return redirect()->route('guestmember.index')
	// 		   ->with('success',' Deleted successfully');

	// }

	public function destroy(Request $request){
		
		$guestmemberid=$request->input('d_gmem');
		$guestmember= guestmember::find($guestmemberid);
		$guestmember->delete();


		return redirect()->back()
			   ->with('success',' Deleted successfully');
	}

	// public function member_list(){
	// 	$brunch=Brunch::all();

	// 	guestmember=Member::paginate(10);
	// 	return view("pages.erp.guestmember.member_guesttable",["members"=>guestmember,"brunchs"=>$brunch]);
	// }
}

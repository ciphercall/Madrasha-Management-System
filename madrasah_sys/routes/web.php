<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\DutyController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\CentralmemberController;
use App\Http\Controllers\GuestmemberController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\OccationController;
use App\Http\Controllers\MahfilController;
use App\Http\Controllers\InvitationcenterController;
use App\Http\Controllers\DboxwithdrawalController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\FazleahmadiController;
use App\Http\Controllers\ExpenseaccountController;
use App\Http\Controllers\DepositcenterController;
use App\Http\Controllers\QurankhatamController;
use App\Http\Controllers\ComplexeController;
use App\Http\Controllers\DonationboxeController;
use App\Http\Controllers\IncomeaccountController;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\PadcollectionController;
use App\Http\Controllers\SobokController;
use App\Http\Controllers\PadusageController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ChamraController;
use App\Http\Controllers\JakatController;
use App\Http\Controllers\IncomeexpController;
use App\Http\Controllers\ComplexpromiseController;

use App\Http\Controllers\BrunchController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource("incomeaccounts",IncomeaccountController::class);
Route::get('edit-incomeaccount/{id}',[IncomeaccountController::class,'edit' ]);
Route::put('incomeaccount-update',[IncomeaccountController::class,'update' ]);
Route::delete('delete-incomeaccount',[IncomeaccountController::class,'destroy' ]);
Route::get('show-incomeaccount/{id}',[IncomeaccountController::class,'show' ]);


// ////////
Route::resource("invitationcenters",InvitationcenterController::class);
Route::get('edit-invitationcenter/{id}',[InvitationcenterController::class,'edit' ]);
Route::put('invitationcenter-update',[InvitationcenterController::class,'update' ]);
Route::delete('delete-invitationcenter',[InvitationcenterController::class,'destroy' ]);
Route::get('show-invitationcenter/{id}',[InvitationcenterController::class,'show' ]);


////////////////////////////

Route::resource("dboxwithdrawals",DboxwithdrawalController::class);
Route::get('edit-dboxwithdrawal/{id}',[DboxwithdrawalController::class,'edit' ]);
Route::put('dboxwithdrawal-update',[DboxwithdrawalController::class,'update' ]);
Route::delete('delete-dboxwithdrawal',[DboxwithdrawalController::class,'destroy' ]);
Route::get('show-dboxwithdrawal/{id}',[DboxwithdrawalController::class,'show' ]);

///////////////////////////

Route::resource("invitations",InvitationController::class);
Route::get('edit-invitation/{id}',[InvitationController::class,'edit']);
Route::put('invitation-update',[InvitationController::class,'update']);
Route::delete('delete-invitation',[InvitationController::class,'destroy' ]);
Route::get('show-invitation/{id}',[InvitationController::class,'show' ]);


//////////////////////////////

Route::resource("fazleahmadis",FazleahmadiController::class);
Route::get('edit-fazleahmadi/{id}',[FazleahmadiController::class,'edit' ]);
Route::put('fazleahmadi-update',[FazleahmadiController::class,'update' ]);
Route::delete('delete-fazleahmadi',[FazleahmadiController::class,'destroy' ]);
Route::get('show-fazleahmadi/{id}',[FazleahmadiController::class,'show' ]);


////////////////////////////
Route::resource("expenseaccounts",ExpenseaccountController::class);
Route::get('edit-expenseaccount/{id}',[ExpenseaccountController::class,'edit' ]);
Route::put('expenseaccount-update',[ExpenseaccountController::class,'update' ]);
Route::delete('delete-expenseaccount',[ExpenseaccountController::class,'destroy' ]);
Route::get('show-expenseaccount/{id}',[ExpenseaccountController::class,'show' ]);



/////////////////////////

Route::resource("depositcenters",DepositcenterController::class);
Route::get('edit-depositcenter/{id}',[DepositcenterController::class,'edit' ]);
Route::put('depositcenter-update',[DepositcenterController::class,'update' ]);
Route::delete('delete-depositcenter',[DepositcenterController::class,'destroy' ]);
Route::get('show-depositcenter/{id}',[DepositcenterController::class,'show' ]);


///////////////////////////////
Route::resource("qurankhatams",QurankhatamController::class);
Route::get('edit-qurankhatam/{id}',[QurankhatamController::class,'edit' ]);
Route::put('qurankhatam-update',[QurankhatamController::class,'update' ]);
Route::delete('delete-qurankhatam',[QurankhatamController::class,'destroy' ]);
Route::get('show-qurankhatam/{id}',[QurankhatamController::class,'show' ]);



/////////////////////////////
Route::resource("complexes",ComplexeController::class);
Route::get('edit-complexe/{id}',[ComplexeController::class,'edit' ]);
Route::put('complexe-update',[ComplexeController::class,'update' ]);
Route::delete('delete-complexe',[ComplexeController::class,'destroy' ]);
Route::get('show-complexe/{id}',[ComplexeController::class,'show' ]);


///////////////////
Route::resource("donationboxes",DonationboxeController::class);
Route::get('edit-donationboxe/{id}',[DonationboxeController::class,'edit' ]);
Route::put('donationboxe-update',[DonationboxeController::class,'update' ]);
Route::delete('delete-donationboxe',[DonationboxeController::class,'destroy' ]);
Route::get('show-donationboxe/{id}',[DonationboxeController::class,'show' ]);

////////////////////////////////////

Route::resource("volunteers",VolunteerController::class);
Route::get('edit-volunteer/{id}',[VolunteerController::class,'edit' ]);
Route::get('show-volunteer/{id}',[VolunteerController::class,'show' ]);
Route::put('volunteer-update',[VolunteerController::class,'update' ]);
Route::delete('delete-volunteer',[VolunteerController::class,'destroy' ]);
Route::get("getvolunteers",[VolunteerController::class,'get_volunteer_json']);
///////////////////////////////////

Route::resource("padcollections",PadcollectionController::class);
Route::get('edit-padcollection/{id}',[PadcollectionController::class,'edit' ]);
Route::get('show-padcollection/{id}',[PadcollectionController::class,'show' ]);
Route::put('padcollection-update',[PadcollectionController::class,'update' ]);
Route::delete('delete-padcollection',[PadcollectionController::class,'destroy' ]);
Route::get("getpadcollections",[PadcollectionController::class,'get_padcollection_json']);


///////////////////////////////////////

Route::resource("padusages",PadusageController::class);
Route::get('edit-padusage/{id}',[PadusageController::class,'edit' ]);
Route::get('show-padusage/{id}',[PadusageController::class,'show' ]);
Route::put('padusage-update',[PadusageController::class,'update' ]);
Route::delete('delete-padusage',[PadusageController::class,'destroy' ]);
Route::get("getpadusagess",[PadusageController::class,'get_padcollection_json']);

///////////////////////////////////////
Route::resource('soboks', SobokController::class);
Route::get('edit-sobok/{id}',[SobokController::class,'edit' ]);
Route::put('sobok-update',[SobokController::class,'update' ]);
Route::delete('delete-sobok',[SobokController::class,'destroy' ]);
// Route::put('member-update',[SobokController::class,'update' ]);

///////////////////////////////////////

Route::resource("brunches",BrunchController::class);
Route::get('edit-brunche/{id}',[BrunchController::class,'edit' ]);
Route::put('brunche-update',[BrunchController::class,'update' ]);
Route::get('show-brunche/{id}',[BrunchController::class,'show' ]);

Route::delete('delete-brunche',[BrunchController::class,'destroy' ]);



///////////////////////////////////////

Route::resource("loans",LoanController::class);
Route::get('edit-loan/{id}',[LoanController::class,'edit' ]);
Route::put('loan-update',[LoanController::class,'update' ]);
Route::get('show-loan/{id}',[LoanController::class,'show' ]);

Route::delete('delete-loan',[LoanController::class,'destroy' ]);

/////////////////////////////////


Route::resource("chamras",ChamraController::class);
Route::get('edit-chamra/{id}',[ChamraController::class,'edit' ]);
Route::put('chamra-update',[ChamraController::class,'update' ]);
Route::get('show-chamra/{id}',[ChamraController::class,'show' ]);

Route::delete('delete-chamra',[ChamraController::class,'destroy' ]);


/////////////////////////////////
Route::resource("jakats",JakatController::class);
Route::get('edit-jakat/{id}',[JakatController::class,'edit' ]);
Route::put('jakat-update',[JakatController::class,'update' ]);
Route::get('show-jakat/{id}',[JakatController::class,'show' ]);

Route::delete('delete-jakat',[JakatController::class,'destroy' ]);


/////////////////////////////////
Route::resource("incomeexps",IncomeexpController::class);
Route::get('edit-incomeexp/{id}',[IncomeexpController::class,'edit' ]);
Route::put('incomeexp-update',[IncomeexpController::class,'update' ]);
Route::get('show-incomeexp/{id}',[IncomeexpController::class,'show' ]);

Route::delete('delete-incomeexp',[IncomeexpController::class,'destroy' ]);


/////////////////////////////////

	Route::resource("complexpromises",ComplexpromiseController::class);
    Route::get('edit-complexpromise/{id}',[ComplexpromiseController::class,'edit' ]);
    Route::put('complexpromise-update',[ComplexpromiseController::class,'update' ]);
    Route::get('show-complexpromise/{id}',[ComplexpromiseController::class,'show' ]);
    Route::delete('delete-complexpromise',[ComplexpromiseController::class,'destroy' ]);  
    


/////////////////////////////////

// Route::put('members/update, Admin\HeaderMemberController@update');

Route::get('/', function () {
    return view('index');
});

// Member 
Route::resource('members', MemberController::class);
Route::get('edit-member/{id}',[MemberController::class,'edit' ]);
Route::put('member-update',[MemberController::class,'update' ]);
Route::delete('delete-member',[MemberController::class,'destroy' ]);


Route::resource("mahfils",MahfilController::class);
Route::get('edit-mahfil/{id}',[MahfilController::class,'edit' ]);
Route::get('show-mahfil/{id}',[MahfilController::class,'show' ]);

Route::put('mahfil-update',[MahfilController::class,'update' ]);
Route::delete('delete-mahfil',[MahfilController::class,'destroy' ]);

Route::get("getbrunchs",[MahfilController::class,'get_brunch_json']);



Route::resource('dutys', DutyController::class);


Route::resource('guestmembers', GuestmemberController::class);
Route::get('edit-guestmember/{id}',[GuestmemberController::class,'edit' ]);
Route::put('guestmember-update',[GuestmemberController::class,'update' ]);
Route::delete('delete-guestmember',[GuestmemberController::class,'destroy' ]);

Route::resource('designations', DesignationController::class);
Route::resource('occations', OccationController::class);




Route::resource('centralmembers', CentralmemberController::class);
Route::get('edit-centralmember/{id}',[CentralmemberController::class,'edit' ]);
Route::put('centralmember-update',[CentralmemberController::class,'update' ]);
Route::delete('delete-centralmember',[CentralmemberController::class,'destroy' ]);

Route::get("getmembers",[CentralmemberController::class,'get_member_json']);





Route::get('all/employee/card', [App\Http\Controllers\MemberController::class, 'member_list'])->name('all/employee/card');


// Route::get("member",[MemberController::class,'member_list']);

// Route::post('getStates',[StateController::class,'getStates'])->name('getStates');




// Route::post('get-work-by-country', [CountriesController::class, 'getCountry']);
// Route::post('get-country-by-state', [CountriesController::class, 'getState']);

// Route::get('dependent-dropdown', [DropdownController::class, 'index']);
Route::post('api/fetch-country', [DropdownController::class, 'fetchCountry']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);
// Route::post('api/fetch-bruch', [DropdownController::class, 'fetchBrunch']);

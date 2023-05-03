<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BrunchController;

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\CmemberController;
use App\Http\Controllers\GuestmemberController;
use App\Http\Controllers\SobokController;
use App\Http\Controllers\InvitationController;




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

Route::get('/', function () {
    return view('index');
});

Route::resource('members', MemberController::class); 
Route::resource('soboks', SobokController::class);
Route::resource('guestmembers', GuestmemberController::class);

Route::resource('brunches', BrunchController::class);

Route::resource('invitations',InvitationController::class);
// Auth::routes();


Route::get('all/employee/card', [App\Http\Controllers\MemberController::class, 'member_list'])->name('all/employee/card');


// Route::get("member",[MemberController::class,'member_list']);

// Route::post('getStates',[StateController::class,'getStates'])->name('getStates');




// Route::post('get-work-by-country', [CountriesController::class, 'getCountry']);
// Route::post('get-country-by-state', [CountriesController::class, 'getState']);

// Route::get('dependent-dropdown', [DropdownController::class, 'index']);
Route::post('api/fetch-country', [DropdownController::class, 'fetchCountry']);
Route::post('api/fetch-cities', [DropdownController::class, 'fetchCity']);

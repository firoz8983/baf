<?php

use App\Http\Controllers\PageController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
    return view('welcome');
})->name('welcome');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/flush','StoreUserDataController@flush')->name('flush');
Route::get('/systemadmin', 'PageController@systemadmin')->name('systemadmin');
Route::get('/oc','PageController@oc')->name('oc');
Route::get('/aco','PageController@aco')->name('aco');
Route::get('check/comment/by/aoc','PageController@CheckComment')->name('CheckComment');

Route::get('check/comment/by/oc','PageController@CheckCommentByOc')->name('CheckCommentByOc');

Route::get('/systemuser','PageController@SystemUser')->name('systemuser');
Route::get('/add/comment/by/systemuser','PageController@addcomment')->name('addcomment');
Route::post('/comment/added','StoreUserDataController@storecomment')->name('comment');


Route::get('/adduser','PageController@adduser')->name('adduser');
Route::post('/store/userdata','StoreUserDataController@StoreUserData')->name('store.userdata');
Route::post('/systemuser/userdata','PageController@UserData')->name('userdata');
Route::get('/request/userpage/','PageController@RequestPage')->name('requestpage');
Route::post('/quarter/data','StoreUserDataController@StoreQuarter')->name('quarterdata');


Route::get('/approve/from/oc','ApproveController@approvefromoc')->name('approvefromoc');
Route::get('add/quarter','PageController@Addquarter')->name('addquarter');
Route::get('all/quarter/aoc','Pagecontroller@allquarteraoc')->name('allQuarterAoc');
Route::get('all/quarter','PageController@allquarter')->name('allquarter');

Route::get('add/userby/admin','PageController@adduserbyadmin')->name('adduserbyadmin');
Route::get('alldata/by/admin','PageController@alldatabyadmin')->name('alldatabyadmin');

Route::get('/oc/alldata','PageController@ocalldata')->name('ocalldata');
Route::get('/approve/data/{id}','ApproveController@approve');
Route::get('/approvedfrom/oc','ApproveController@approvefromoc');
Route::get('/approved/by/aoc/{id}','ApproveController@approvebyaoc')->name('/approved/by/aoc/');

Route::get('/approved/user/latest','ApproveController@ApprovedUser')->name('approveduser');

Route::get('/send/mail/{id}','ApproveController@sendmail');


Route::get('/change/password','PageController@changepass')->name('changepass');
Route::post('/update/password','PageController@updatepass')->name('updatepassword');


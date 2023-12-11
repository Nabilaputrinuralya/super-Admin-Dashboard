<?php

use App\Models\NavbarPage;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PortalLoginController;
use App\Http\Controllers\ProjectPageController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\LoginDestinationController;
use App\Http\Controllers\ProjectManagementController;
use App\Http\Controllers\ContactUsSendMessageController;

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
});

Route::get('/landingpage', [NavbarController::class, 'index'])->name('landingpage');


Route::get('/login-page', function () {
    return view('login-page');
});

// Route::get('/copyright-page', function () {
//     return view('copyright-page');
// });

Route::get('/privacypolicy-page', function () {
    return view('privacypolicy-page');
});

Route::get('/termsofuse-page', function () {
    return view('termsofuse-page');
});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});

/*UPDATE PROFILE */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    
    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
   
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
Route::get('profile',[UserController::class,'profile'])->name('user.profile');
Route::get('settings',[UserController::class,'settings'])->name('user.settings');

Route::post('update-profile-info',[UserController::class,'updateInfo'])->name('userUpdateInfo');
    Route::post('change-profile-picture',[UserController::class,'updatePicture'])->name('userPictureUpdate');
    Route::post('change-password',[UserController::class,'changePassword'])->name('userChangePassword');

});

/*PROJECTS*/
Route::get('/dataourproject',[ProjectPageController::class, 'index'])->name('dataourproject');
Route::get('/createproject',[ProjectPageController::class, 'create'])->name('createproject');
Route::post('/simpanproject',[ProjectPageController::class, 'store'])->name('simpanproject');
Route::get('/editproject/{id}',[ProjectPageController::class, 'edit'])->name('editproject');
Route::post('/updateproject/{id}',[ProjectPageController::class, 'update'])->name('updateproject');
Route::delete('/deleteproject/{id}', [ProjectPageController::class, 'destroy'])->name('deleteproject');
Route::get('/showproject/{id}',[ProjectPageController::class, 'show'])->name('showproject');

/*NAVBAR*/
Route::get('/lp',[NavbarController::class, 'lp'])->name('lp');
Route::get('/datanavbar',[NavbarController::class, 'index'])->name('datanavbar');
Route::get('/createnavbar',[NavbarController::class, 'create'])->name('createnavbar');
Route::post('/simpannavbar',[NavbarController::class, 'store'])->name('simpannavbar');
Route::get('/editnavbar/{id}',[NavbarController::class, 'edit'])->name('editnavbar');
Route::post('/updatenavbar/{id}',[NavbarController::class, 'update'])->name('updatenavbar');
Route::get('/deletenavbar/{id}',[NavbarController::class, 'destroy'])->name('deletenavbar');
Route::get('/shownavbar/{id}',[NavbarController::class, 'show'])->name('shownavbar');

/*HOME*/
Route::get('/datahome',[HomeController::class, 'index'])->name('datahome');
Route::get('/createhome',[HomeController::class, 'create'])->name('createhome');
Route::post('/simpanhome',[HomeController::class, 'store'])->name('simpanhome');
Route::get('/edithome/{id}',[HomeController::class, 'edit'])->name('edithome');
Route::post('/updatehome/{id}',[HomeController::class, 'update'])->name('updatehome');
Route::get('/deletehome/{id}',[HomeController::class, 'destroy'])->name('deletehome');
// Route::get('/showhome/{id}',[HomeController::class, 'show'])->name('showhome');





// /*ABOUT*/
Route::get('/dataabout',[AboutController::class, 'index'])->name('dataabout');
Route::get('/createaboutteam',[AboutController::class, 'createaboutteam'])->name('createaboutteam');
Route::post('/simpanaboutteam',[AboutController::class, 'storeaboutteam'])->name('simpanaboutteam');
Route::get('/editaboutteam/{id}',[AboutController::class, 'editaboutteam'])->name('editaboutteam');
Route::post('/updateaboutteam/{id}',[AboutController::class, 'updateaboutteam'])->name('updateaboutteam');
Route::delete('/deleteaboutteam/{id}', [AboutController::class, 'destroyaboutteam'])->name('deleteaboutteam');
                                                                                                                                                                                                                                                                                                                                                                  
Route::get('/dataabout',[AboutController::class, 'index'])->name('dataabout');
Route::get('/createaboutdescription',[AboutController::class, 'createabboutdescription'])->name('createaboutdescription');
Route::post('/simpanaboutdescription',[AboutController::class, 'storeaboutdescription'])->name('simpanaboutdescription');
Route::get('/editaboutdescription/{id}',[AboutController::class, 'editaboutdescription'])->name('editaboutdescription');
Route::post('/updateaboutdescription/{id}',[AboutController::class, 'updateaboutdescription'])->name('updateaboutdescription');
Route::get('/deleteaboutdescription/{id}',[AboutController::class, 'destroyaboutdescription'])->name('deleteaboutdescription');



/*FOOTER*/
Route::get('/datafooter',[FooterController::class, 'index'])->name('datafooter');
Route::get('/createfooter',[FooterController::class, 'create'])->name('createfooter');
Route::post('/simpanfooter',[FooterController::class, 'store'])->name('simpanfooter');
Route::get('/editfooter/{id}',[FooterController::class, 'edit'])->name('editfooter');
Route::post('/updatefooter/{id}',[FooterController::class, 'update'])->name('updatefooter');
Route::get('/deletefooter/{id}',[FooterController::class, 'destroy'])->name('deletefooter');
Route::get('/showfooter/{id}',[FooterController::class, 'show'])->name('showfooter');

/*CONTACT*/
Route::get('/datacontact',[ContactUsController::class, 'index'])->name('datacontact');
Route::get('/createcontactcard1',[ContactUsController::class, 'create'])->name('createcontactcard1');
Route::post('/simpancontactcard1',[ContactUsController::class, 'store'])->name('simpancontactcard1');
Route::get('/editcontactcard1/{id}',[ContactUsController::class, 'edit'])->name('editcontactcard1');
Route::post('/updatecontactcard1/{id}',[ContactUsController::class, 'update'])->name('updatecontactcard1');
Route::get('/deletecontactcard1/{id}',[ContactUsController::class, 'destroy'])->name('deletecontactcard1');

Route::get('/datacontact',[ContactUsController::class, 'index'])->name('datacontact');
Route::get('/createcontactcard2',[ContactUsController::class, 'createcard2'])->name('createcontactcard2');
Route::post('/simpancontactcard2',[ContactUsController::class, 'storecard2'])->name('simpancontactcard2');
Route::get('/editcontactcard2/{id}',[ContactUsController::class, 'editcard2'])->name('editcontactcard2');
Route::post('/updatecontactcard2/{id}',[ContactUsController::class, 'updatecard2'])->name('updatecontactcard2');
Route::get('/deletecontactcard2/{id}',[ContactUsController::class, 'destroycard2'])->name('deletecontactcard2');

Route::get('add',[StudentController::class, 'index']);
Route::post('save',[StudentController::class, 'save'])->name('student.save');

/*PROJECT MANAGEMENT*/
Route::get('/dataprojectmanagement',[ProjectManagementController::class, 'index'])->name('dataprojectmanagement');
Route::get('/createprojectmanagement',[ProjectManagementController::class, 'create'])->name('createprojectmanagement');
Route::post('/simpanprojectmanagement',[ProjectManagementController::class, 'store'])->name('simpanprojectmanagement');
Route::get('/editprojectmanagement/{id}',[ProjectManagementController::class, 'edit'])->name('editprojectmanagement');
Route::post('/updateprojectmanagement',[ProjectManagementController::class, 'update'])->name('updateprojectmanagement');
Route::delete('/deleteprojectmanagement/{id}', [ProjectManagementController::class, 'destroy'])->name('deleteprojectmanagement');
// Route::get('/showpms/{id}',[ProjectManagementController::class, 'show'])->name('showpms');

/*MESSAGE*/
Route::get('/datamessage',[MessageController::class, 'index'])->name('datamessage');
Route::get('/createmessage',[MessageController::class, 'create'])->name('createmessage');
Route::get('/editmessage/{id}',[MessageController::class, 'edit'])->name('editmessage');
Route::post('/updatemessage/{id}',[MessageController::class, 'update'])->name('updatemessage');
Route::delete('/deletemessage/{id}', [MessageController::class, 'destroy'])->name('deletemessage');
Route::get('/showmessage/{id}',[MessageController::class, 'show'])->name('showmessage');
Route::get('/change-status/{id}',[MessageController::class, 'changeStatus'])->name('changestatus');

Route::get('/landingpage',[LandingPageController::class, 'index'])->name('landingpage');
Route::get('/copyrightpage',[LandingPageController::class, 'copyrightpage'])->name('copyrightpage');
Route::get('/privacypolicypage',[LandingPageController::class, 'privacypolicypage'])->name('privacypolicypage');
Route::get('/termsofusepage',[LandingPageController::class, 'termsofusepage'])->name('termsofusepage');
Route::get('/projectdetails',[LandingPageController::class, 'projectdetail'])->name('projectdetails');
// Route::post('/store-form', [LandingPageController::class, 'store']);
// Route::post('/dashboard', [LandingPageController::class, 'dashboard']);


Route::get('/test',[TestController::class, 'index'])->name('test');

Route::get('/mahasiswa',[MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create',[MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class, 'store']);

// Route::get('add-blog-post-form', [ContactUsSendMessageController::class, 'index']);
// Route::post('store-form', [ContactUsSendMessageController::class, 'store']);
// Route::get('dashboard', [ContactUsSendMessageController::class, 'dashboard']);

// Route::get('/db',[MessageController::class, 'db'])->name('db');
// Route::get('/index',[MessageController::class, 'index'])->name('index');
// Route::post('/store-form',[MessageController::class, 'store'])->name('store-form');
// Route::post('/dashboard',[MessageController::class, 'dashboard'])->name('dashboard');
// Route::get('/change-status/{id}',[MessageController::class, 'changeStatus'])->name('changestatus');


// Route::get('add-blog-post-form', [MessageController::class, 'index']);
// // Route::get('dashboard', [MessageController::class, 'dashboard']);
// Route::post('store-form', [MessageController::class, 'store']);

/*USER MANAGEMENT*/
Route::get('/datausermanagement',[UserManagementController::class, 'index'])->name('datausermanagement');
Route::get('/createusermanagement',[UserManagementController::class, 'create'])->name('createusermanagement');
Route::post('/simpanusermanagement',[UserManagementController::class, 'store'])->name('simpanusermanagement');
Route::get('/editusermanagement/{id}',[UserManagementController::class, 'edit'])->name('editusermanagement');
Route::post('/updateusermanagement/{id}',[UserManagementController::class, 'update'])->name('updateusermanagement');
Route::get('/deleteusermanagement/{id}',[UserManagementController::class, 'destroy'])->name('deleteusermanagement');


/*PORTAL LOGIN*/
Route::get('/dataportallogin',[PortalLoginController::class, 'index'])->name('dataportallogin');
Route::get('/createportallogin',[PortalLoginController::class, 'create'])->name('createportallogin');
Route::post('/simpanportallogin',[PortalLoginController::class, 'store'])->name('simpanportallogin');
Route::get('/editportallogin/{id}',[PortalLoginController::class, 'edit'])->name('editportallogin');
Route::post('/updateportallogin/{id}',[PortalLoginController::class, 'update'])->name('updateportallogin');
Route::delete('/deleteportallogin/{id}', [PortalLoginController::class, 'destroy'])->name('deleteportallogin');


Route::get('/logindestination',[LoginDestinationController::class, 'index'])->name('logindestination');


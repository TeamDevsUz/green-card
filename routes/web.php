<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blade\UserController;
use App\Http\Controllers\Blade\RoleController;
use App\Http\Controllers\Blade\PermissionController;
use App\Http\Controllers\Blade\HomeController;
use App\Http\Controllers\Blade\ApiUserController;
use App\Http\Controllers\Blade\OrderController;
use App\Http\Controllers\Blade\PagesController;
use App\Http\Controllers\Blade\VisaController;
/*
|--------------------------------------------------------------------------
| Blade (front-end) Routes
|--------------------------------------------------------------------------
|
| Here is we write all routes which are related to web pages
| like UserManagement interfaces, Diagrams and others
|
*/

// Default laravel auth routes
// Auth::routes();
Auth::routes([
    'register' => false
]);


// Welcome page
// Route::get('/', function (){
//     return redirect()->route('home');
// })->name('welcome');


Route::get('/', [PagesController::class, 'index'])->name('siteIndex');
Route::get('/registration', [PagesController::class, 'registration'])->name('siteForm');
Route::post( '/registrationForm', [PagesController::class, 'registrationForm'])->name('siteRegistrationForm');
Route::get('/registrationReceipt', [PagesController::class, 'registrationReceipt'])->name('siteRegistrationReceipt');
Route::get('/registrationEdit', [PagesController::class, 'registrationEdit'])->name('siteRegistrationEdit');
Route::post('/registrationUpdate', [PagesController::class, 'registrationUpdate'])->name('siteRegistrationUpdate');
Route::get('/completeRegistration', [PagesController::class, 'completeRegistration'])->name('siteCompleteRegistration');
Route::get('/services', [PagesController::class, 'services'])->name('siteServices');
Route::get('/news', [PagesController::class, 'news'])->name('siteNews');
Route::get('/questions', [PagesController::class, 'questions'])->name('siteQuestions');
Route::get('/contactus', [PagesController::class, 'contactus'])->name('siteContactus');
Route::get('/information-visa', [PagesController::class, 'information'])->name('siteInformation');
// Web pages
Route::group(['middleware' => 'auth'],function (){

    // there should be graphics, diagrams about total conditions
    Route::get('/admin', [HomeController::class,'index'])->name('home');

    // Users
    Route::get('/users',[UserController::class,'index'])->name('userIndex');
    Route::get('/user/add',[UserController::class,'add'])->name('userAdd');
    Route::post('/user/create',[UserController::class,'create'])->name('userCreate');
    Route::get('/user/{id}/edit',[UserController::class,'edit'])->name('userEdit');
    Route::post('/user/update/{id}',[UserController::class,'update'])->name('userUpdate');
    Route::delete('/user/delete/{id}',[UserController::class,'destroy'])->name('userDestroy');
    Route::get('/user/theme-set/{id}',[UserController::class,'setTheme'])->name('userSetTheme');

    // Permissions
    Route::get('/permissions',[PermissionController::class,'index'])->name('permissionIndex');
    Route::get('/permission/add',[PermissionController::class,'add'])->name('permissionAdd');
    Route::post('/permission/create',[PermissionController::class,'create'])->name('permissionCreate');
    Route::get('/permission/{id}/edit',[PermissionController::class,'edit'])->name('permissionEdit');
    Route::post('/permission/update/{id}',[PermissionController::class,'update'])->name('permissionUpdate');
    Route::delete('/permission/delete/{id}',[PermissionController::class,'destroy'])->name('permissionDestroy');

    // Roles
    Route::get('/roles',[RoleController::class,'index'])->name('roleIndex');
    Route::get('/role/add',[RoleController::class,'add'])->name('roleAdd');
    Route::post('/role/create',[RoleController::class,'create'])->name('roleCreate');
    Route::get('/role/{role_id}/edit',[RoleController::class,'edit'])->name('roleEdit');
    Route::post('/role/update/{role_id}',[RoleController::class,'update'])->name('roleUpdate');
    Route::delete('/role/delete/{id}',[RoleController::class,'destroy'])->name('roleDestroy');

    // ApiUsers
    Route::get('/api-users',[ApiUserController::class,'index'])->name('api-userIndex');
    Route::get('/api-user/add',[ApiUserController::class,'add'])->name('api-userAdd');
    Route::post('/api-user/create',[ApiUserController::class,'create'])->name('api-userCreate');
    Route::get('/api-user/show/{id}',[ApiUserController::class,'show'])->name('api-userShow');
    Route::get('/api-user/{id}/edit',[ApiUserController::class,'edit'])->name('api-userEdit');
    Route::post('/api-user/update/{id}',[ApiUserController::class,'update'])->name('api-userUpdate');
    Route::delete('/api-user/delete/{id}',[ApiUserController::class,'destroy'])->name('api-userDestroy');
    Route::delete('/api-user-token/delete/{id}',[ApiUserController::class,'destroyToken'])->name('api-tokenDestroy');
    
    
    // Orders
    Route::get('/orders',[OrderController::class,'index'])->name('orderIndex');
    Route::get('/admin/order/{user_id}/details',[OrderController::class, 'details'])->name('orderDetails');
    Route::get('/download{file}',[OrderController::class, 'download'])->name('download');
    Route::delete('/selected-students',[OrderController::class, 'deleteCheckedCandidats'])->name('candidats-delete');
    Route::delete('/order/{id}',[OrderController::class, 'destroy'])->name('orderDestroy');
    Route::get('/test',[TestController::class,'index']);
    
    
    // Visa Deadline
    Route::get('/visa',[VisaController::class,'index'])->name('visaIndex');
    Route::get('/visa/add',[VisaController::class,'add'])->name('visaAdd');
    Route::post('/visa/add/create',[VisaController::class,'create'])->name('visaCreate');
    Route::get('/visa/{id}/adit',[VisaController::class,'edit'])->name('visaEdit');
    Route::post('/visa/update/{day_id}', [VisaController::class, 'update'])->name('visaUpdate');
});

// Change language session condition
Route::get('/language/{lang}',function ($lang){
    $lang = strtolower($lang);
    if ($lang == 'ru' || $lang == 'uz')
    {
        session([
            'locale' => $lang
        ]);
    }
    return redirect()->back();
}) -> name('changelang');;




/*
|--------------------------------------------------------------------------
| This is the end of Blade (front-end) Routes
|-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\-\
*/

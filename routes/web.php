<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\siteAdminController;
use App\Http\Controllers\registerLoginController;
use App\Http\Controllers\propertyController;

use Illuminate\Support\Facades\Route;


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

//Admin Panel
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/auth', [AdminController::class, 'auth'])->name('admin.auth.login');

//Site
Route::get('/',[HomeController::class, 'front'])->name('view_home');
Route::get('/property',[HomeController::class, 'properties'])->name('view_property');
Route::get('/property/latest',[HomeController::class, 'latest_properties']);
Route::get('/property/detail/{id}',[HomeController::class, 'property_detail'])->name('view_prop_detail');
Route::get('/property/compare',[HomeController::class, 'property_comp'])->name('view_prop_comp');

Route::post('/property/search',[HomeController::class, 'home_search'])->name('home_filter');

//login & register
// Route::group();
Route::post('/register',[registerLoginController::class,'register_user'])->name('register-user');
Route::post('/Admin/Dashboard',[registerLoginController::class,'login_user'])->name('login-user');
Route::get('/logout',[registerLoginController::class,'logout_user'])->name('logout_user');

//siteAdmin
Route::middleware('checkUser')->group(function () {
    Route::get('/admin/dashboard',[SiteAdminController::class,'dash'])->name('admin_dash')->middleware('checkUser');
    Route::get('/admin/propertyList',[SiteAdminController::class,'prop_list_view'])->name('admin_prop_list');
    Route::get('/admin/addProperty',[SiteAdminController::class,'add_property_view'])->name('admin_add_prop');
    Route::get('/admin/changePassword',[SiteAdminController::class,'change_password_view'])->name('admin_change_pass');

    Route::post('/admin/property/short_save',[propertyController::class,'save_short_desc'])->name('save_sort_prop');
    Route::get('/admin/property/update/{id}',[propertyController::class, 'update_prop_view']);
    Route::post('/admin/property/update_prop',[propertyController::class,'update_desc'])->name('update_prop');
});

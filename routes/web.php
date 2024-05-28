<?php

use App\Http\Controllers\DBBackupController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PlottingReviewerController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RefSkemaController;
use App\Http\Controllers\SkemaFileController;
use App\Http\Controllers\RefPendanaanController;
use App\Http\Controllers\SkemaSettingController;
use App\Http\Controllers\UsulanController;
use App\Http\Controllers\UsulanPenelitianController;
use App\Http\Controllers\ReviewUsulanController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::permanentRedirect('/', '/login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('profil', ProfilController::class)->except('destroy');

Route::resource('manage-user', UserController::class);
Route::resource('manage-role', RoleController::class);
Route::resource('manage-menu', MenuController::class);

Route::resource('ref-skema', RefSkemaController::class);
Route::resource('ref-skema/{trx_skema_id}/skema-file', SkemaFileController::class);
Route::resource('ref-skema/{trx_skema_id}/skema-pendanaan', RefPendanaanController::class);
Route::resource('ref-skema/{trx_skema_id}/skema-setting', SkemaSettingController::class);

Route::resource('usulan', UsulanController::class);
Route::resource('usulan-penelitian', UsulanPenelitianController::class);
Route::resource('plotting-reviewer', PlottingReviewerController::class);
Route::resource('review-usulan', ReviewUsulanController::class);
Route::resource('plotting-reviewer', PlottingReviewerController::class);

Route::resource('manage-permission', PermissionController::class)->only('store', 'destroy');


Route::get('dbbackup', [DBBackupController::class, 'DBDataBackup']);


// Menambahkan route untuk ref skema
// Tambahkan resource route untuk ref-skema
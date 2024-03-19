<?php

use App\Http\Controllers\BoostPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DuoBoostPageController;
use App\Http\Controllers\RadiantBoostPageController;
use App\Http\Controllers\WinBoostPageController;
use App\Http\Controllers\PlacementBoostPageController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AccountPageController;
use App\Http\Controllers\BoostInformationPageController;
use App\Http\Controllers\AdminPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomepageController::class, 'index'])->name('index');
Route::get('boost',[BoostPageController::class, 'boostpage'])->name('boost');
Route::get('duoboost',[DuoBoostPageController::class, 'duoboostpage'])->name('duoboostpage');
Route::get('radiantboost',[RadiantBoostPageController::class, 'radiantboostpage'])->name('radiantboostpage');
Route::get('winboost',[WinBoostPageController::class, 'winboostpage'])->name('winboostpage');
Route::get('placementboost',[PlacementBoostPageController::class, 'placementboostpage'])->name('placementboostpage');
Route::get('signin',[SignInController::class, 'signin'])->name('signin');
Route::get('signup',[SignUpController::class, 'signup'])->name('signup');
Route::get('admin',[AdminPageController::class, 'allProjects'])->name('admin');
Route::group(['middleware' =>['auth']], function (){
    Route::get('boost-information',[BoostInformationPageController::class, 'boostinformationpage'])->name('boost-information');
    Route::get('account',[AccountPageController::class, 'retrieveProjects'])->name('account');
    Route::get('boost-details/{id}',[AccountPageController::class, 'boostDetails'])->name('boost-details');
});
Route::delete('admin/{id}', [AdminPageController::class, 'deleteBoost'])->name('delete.boost');
Route::post('signup-function',[SignUpController::class, 'store'])->name('signup-function');
Route::post('signin-function', [SignInController::class, 'login'])->name('signin-function');
Route::post('logout', [SignInController::class, 'logout'])->name('logout');
Route::post('post-boost',[BoostPageController::class, 'postboost'])->name('post-boost');

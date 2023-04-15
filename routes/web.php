 <?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OfficerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Author: Botho Neo
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
    ])->group(function () {
     Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

Route::get('/addUser_view',[AdminController::class,'addview']);
Route::post('/uploadUser',[AdminController::class,'upload']);
Route::get('/admin.home',[AdminController::class,'upload1']);



Route::get('/addAsset_view',[OfficerController::class,'addview2']); 
Route::post('/uploadAsset',[OfficerController::class,'upload']); 
Route::get('/home',[OfficerController::class,'index']);
Route::get('/assetMove_view',[OfficerController::class,'addview3']); 



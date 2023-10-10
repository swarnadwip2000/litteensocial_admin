<?php
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('admin/login');
});
Route::post('logindb', [AdminController::class, 'logindb']); 
Route::get('logout', [AdminController::class, 'logout']);
Route::get('dashboard', [AdminController::class, 'dashboard']);

Route::get('usermanagement', [AdminController::class, 'usermanagement']);
Route::get('list_user', [AdminController::class, 'list_user']);
Route::post('saveusermanagement', [AdminController::class, 'saveusermanagement']);
Route::get('/update_usermanagement', [AdminController::class, 'update_usermanagement']);
Route::get('delete_usermanagement/{id}', [AdminController::class, 'delete_usermanagement']);
Route::get('addusermanagement', [AdminController::class, 'addusermanagement']);

Route::get('addadvertiser', [AdminController::class, 'addadvertiser']);
Route::get('listadvertiser', [AdminController::class, 'listadvertiser']);
Route::post('saveadvertiser', [AdminController::class, 'saveadvertiser']);
Route::get('/update_advertiser', [AdminController::class, 'update_advertiser']);
Route::get('delete_advertiser/{id}', [AdminController::class, 'delete_advertiser']);


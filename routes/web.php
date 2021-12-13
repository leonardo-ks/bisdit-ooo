<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\OlehController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\favoriteController as ControllersFavoriteController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('varianoleh/{idoleh}', [OlehController::class, 'detailvarianoleh']);
Route::get('login', [LoginController::class, 'index'])->middleware('guest');
Route::post('login', [LoginController::class, 'auth']);
Route::post('logout', [LoginController::class, 'logout']);
Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);
Route::get('daerah', [FilterController::class, 'daerahasal']);
Route::get('filter/{kategori}/{by}', [FilterController::class, 'filterby']);
Route::get('jenis/{jenis}', [FilterController::class, 'varianjenis']);
Route::get('favorit', [FavoriteController::class, 'favorit']);
Route::get('mitra', [MitraController::class, 'mitra']);
Route::get('search', [SearchController::class, 'search']);
Route::get('/favorit/hapus/{idbookmark}',[FavoriteController::class,'hapusfavorit']);

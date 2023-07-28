<?php

use Illuminate\Support\Facades\Route;
// use app\http\Controller\homeContoller;
use App\Http\Controllers\homeController;///// first change
use App\Http\Controllers\DataController;

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

// Route::get('/', [homeController::class, 'homeIndex'] );
Route::post('dataInsert',[homeController::class,'DataInsert']);
Route::get('/',  [homeController::class, 'homeindex'])->name('home');//////2nd change

Route::get('/data',[DataController::class,'DataTableIndex'])->name('/data/delete');
Route::get('/edit{name}',[DataController::class,'DataUpdateIndex']);
Route::post('/dataUpdate{name}',[DataController::class,'DataUpdate']);
Route::get('/data/delete/{name}',[DataController::class,'del']);


Route::get('/trait',[DataController::class,'Dateformat']); 

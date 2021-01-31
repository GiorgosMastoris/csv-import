<?php

use App\Models\Humans;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HumansController;

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

// Route::get('/',[HumansController::class, 'importForm']);

Route::post('/',[HumansController::class, 'store'])->name('employee.import');

Route::group(['prefix'=>'humans'],function () {
    Route::get('/',[ HumansController::class, 'index'])->name('humans.index');
    Route::post('/',[ HumansController::class, 'update'])->name('humans.update');
    Route::get('/{id}', [HumansController::class, 'destroy'])->name('humans.destroy');
}); 

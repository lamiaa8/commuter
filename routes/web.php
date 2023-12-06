<?php

use App\Http\Controllers\Commuter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('commer.index');
});





// Auth::routes();


Route::prefix("commer/")->group(
    function () {
        Route::get("index", [Commuter::class, 'index'])->name('commer.index');

        Route::get("shift", [Commuter::class, 'shift'])->name('commer.shift'); //done


    }
);

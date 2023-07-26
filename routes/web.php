<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/list', [TransactionController::class, 'index'])-> name('transactionList');
Route::get('/add', [TransactionController::class, 'create'])-> name('transactionAdd');
Route::post('/add', [TransactionController::class, 'store'])-> name('transactionStore');

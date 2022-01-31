<?php

use App\Http\Controllers\AgentsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\GadgetsController;
use App\Http\Controllers\MpesaTransactionsController;
use App\Http\Controllers\TransactionssController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::resource('home', dashboard::class);
Route::resource('clients', ClientsController::class);
Route::resource('agents', AgentsController::class);
Route::resource('gadgets', GadgetsController::class);
Route::resource('transactions', TransactionssController::class);
Route::resource('mpesa-transactions', MpesaTransactionsController::class);


Route::get('deleted-clients', [ClientsController::class, 'deletedClients'])->name('deleted-clients');
Route::get('deleted-agents', [AgentsController::class, 'deletedAgents'])->name('deleted-agents');
Route::get('deleted-gadgets', [GadgetsController::class, 'deletedGadgets'])->name('deleted-gadgets');
Route::get('deleted-transactions', [TransactionssController::class, 'deletedTransactions'])->name('deleted-transactions');
Route::get('deleted-mpesa-transactions', [MpesaTransactionsController::class, 'deletedMpesaTransactions'])->name('deleted-mpesa-transactions');

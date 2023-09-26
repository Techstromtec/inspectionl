<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Master\MasterController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Agreement\AgreementController;
use App\Http\Controllers\Invoice\InvoiceController;
use App\Http\Controllers\Lead\LeadController;
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

$controller_path = 'App\Http\Controllers';

// authentication
Route::get('/auth/login-basic', $controller_path . '\Auth\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\Auth\RegisterBasic@index')->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', $controller_path . '\Auth\ForgotPasswordBasic@index')->name('auth-reset-password-basic');

// Lead management
// User controller
Route::controller(LeadController::class)->group(function() {
    Route::get('/leads', 'index')->name('leads.index')->middleware('auth');
    Route::get('/lead/create', 'create')->name('lead.create')->middleware('auth');
    Route::post('/leads', 'store')->name('leads.store');
    Route::get('/leads/{id}/edit', 'edit')->name('leads.edit')->middleware('auth');
    Route::get('/lead-valuation/{id}', 'valuate')->name('leads.valuate')->middleware('auth');
    Route::put('/leads/{id}', 'update')->name('leads.update')->middleware('auth');
    Route::get('/leads/get-data', 'getLeadsData')->name('leads.get-data');
    Route::post('/upload/{leadId}', 'upload')->name('lead.upload');
    Route::post('/valuate2/{leadId}', 'valuate2')->name('valuations2.store');
    Route::post('/valuate3/{leadId}', 'valuate3')->name('valuations3.store');
    Route::get('/report/view/{leadId}', 'report')->name('report');
});

// User controller
Route::controller(LoginRegisterController::class)->group(function() {
   
    Route::get('/user/list', 'index')->name('users.index')->middleware('auth');
    Route::get('/users/data', 'getUsersData')->name('users.data');
    Route::get('/user/create', 'create')->name('users.create')->middleware('auth');
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('users.store')->middleware('auth');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/users ', 'show')->name('users.show');

    Route::get('/users/{user}/edit', 'edit')->name('users.edit');
    Route::put('/users/{id}', 'update')->name('users.update');
    Route::delete('/users/{user}', 'destroy')->name('users.destroy');

    Route::get('/get-cities/{stateId}', 'getCities');
    Route::get('/get-areas/{cityId}', 'getAreas');
    Route::get('/get-pincode/{areaId}', 'getPincode');

    Route::get('/', function () {
        if(Auth::check()) 
            return redirect('dashboard');
        else 
            return redirect('login');
    });
   
});
                                                                          

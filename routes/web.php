<?php

use App\Http\livewire\Renter;
use App\Http\Livewire\RentLog;
use App\Http\livewire\Dashboard;
use App\Http\livewire\LaptopShow;
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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/laptop-show', LaptopShow::class)->name('laptop-show');
Route::get('/rent-log', RentLog::class)->name('rent-log');
Route::get('/renter', Renter::class)->name('renter');

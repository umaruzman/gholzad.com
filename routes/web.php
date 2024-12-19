<?php

use App\Http\Controllers\client\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('client.home');
Route::get('/aboutus', [HomeController::class, 'about'])->name('client.about');
Route::get('/projects', [HomeController::class, 'projects'])->name('client.projects');
Route::get('/contact', [HomeController::class, 'contact'])->name('client.contact');
Route::post('/contact', [HomeController::class, 'contactSubmit'])->name('client.contact.post');

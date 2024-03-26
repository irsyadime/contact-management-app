<?php

use App\Http\Controllers\ContactController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contacts',[ContactController::class, 'index'])->name('contact');
Route::get('/contacts/add',[ContactController::class, 'addContactView'])->name('contact.form');
Route::post('/contacts/add',[ContactController::class, 'store'])->name('contact.store');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::get('/contacts/{id}',[ContactController::class, 'toContactUpdateView'])->name('contact.form.update');
Route::delete('/contacts/{id}',[ContactController::class, 'delete'])->name('contact.delete');

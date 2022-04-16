<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
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

Route::get('/', [ContactController::class, 'index'])->name('site.home');

Route::get('contacts/create', [ContactController::class, 'create'])->name('site.create');
Route::post('contacts/create', [ContactController::class, 'store'])->name('site.create.post');

Route::get('contact/{contact}', [ContactController::class, 'edit'])->name('site.edit');
Route::patch('contact/{contact}', [ContactController::class, 'update'])->name('site.edit.update');

Route::get('contact/details/{contact}', [ContactController::class, 'show'])->name('site.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

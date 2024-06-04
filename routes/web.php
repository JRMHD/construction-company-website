<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteRequestController;

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
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('service', function () {
    return view('service');
});
Route::get('project', function () {
    return view('project');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('about', function () {
    return view('about');
});
Route::get('quoterequest', function () {
    return view('quoterequest');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/submit_quote', [QuoteRequestController::class, 'store'])->name('quote.store');

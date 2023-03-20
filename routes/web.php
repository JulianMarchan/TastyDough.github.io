<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TastyDoughMail;


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
    return view('landing');
});

Auth::routes();

Route::get('/product', [App\Http\Controllers\PageController::class, 'product'])->name('product');
Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('services');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');

// Route::get('/contact', function () {
//     Mail::to('test@email.com')->send(new TastyDoughMail());
// });

// Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
// Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'show'])->name('contact.show');
Route::POST('/contact', [App\Http\Controllers\ContactController::class, 'submit'])->name('contact.submit');





//to redirect//

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

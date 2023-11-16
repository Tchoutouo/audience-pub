<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::get('services', function () {
    return view('guest.services');
});

// Route::get('contact-us', function () {
//     return view('guest.contact-us');
// });

Route::get('contact-us', function () {
    return view('guest.contact-us');
});

Route::post('SendMail', [MailController::class, 'EnvoiMail'])->name('SendMail'); 

Route::get('about-us', function () {
    return view('guest.about-us');
});

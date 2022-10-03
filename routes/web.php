<?php

use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;


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

Route::get('/', [ PageController::class,'home'])->name('home');

Route::get('/test_email', function(){
    return new ContactMessageCreated('Diallo','mamadoudialloyorgo@gmail.com','Je vous remercie laracarte');
});


Route::get('/about',[ PageController::class,'about'])->name('about');

Route::get('/contacts',[ ContactController::class,'create'])->name('contacts');

Route::post('/contacts',[ ContactController::class,'store'])->name('contacts');




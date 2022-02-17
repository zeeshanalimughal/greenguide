<?php

use Illuminate\Support\Facades\Route;



// Client side Controllers

use App\Http\Controllers\frontend\HomePage;
use App\Http\Controllers\frontend\Jobs;
use App\Http\Controllers\frontend\GreenInitiative;
use App\Http\Controllers\frontend\About;
use App\Http\Controllers\frontend\Businessdirectory;
use App\Http\Controllers\frontend\Localevents;
use App\Http\Controllers\frontend\Advertise;
use App\Http\Controllers\frontend\Auth;
use App\Http\Controllers\frontend\UserAccount;
use App\Http\Controllers\frontend\ComunityGrowth;
use App\Http\Controllers\frontend\Contact;







// Client side Routes

Route::get('/', [HomePage::class, 'index']);
Route::get('/jobs', [Jobs::class, 'index']);
Route::get('/greeninitiative', [GreenInitiative::class, 'index']);
Route::get('/about', [About::class, 'index']);

Route::get('/businessdirectory', [Businessdirectory::class, 'index']);
Route::get('/add-new-directory', [Businessdirectory::class, 'add_new_directory']);


Route::get('/localevents', [Localevents::class, 'index']);

Route::get('/advertise', [Advertise::class, 'index']);
Route::get('/advert-design-book', [Advertise::class, 'advert_design_book']);

Route::get('/communitygrowth', [ComunityGrowth::class, 'index']);


Route::get('/login', [Auth::class, 'login_index']);
Route::get('/register', [Auth::class, 'register_index']);
Route::get('/forgot-password', [Auth::class, 'forgot_pass_index']);

Route::get('/account', [UserAccount::class, 'index']);
Route::get('/contact', [Contact::class, 'index']);



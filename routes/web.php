<?php

use App\Livewire\BlogPage;
use App\Livewire\BureauPage;
use App\Livewire\ClubPage;
use App\Livewire\ContactPage;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', BlogPage::class);
Route::get('/bureau', BureauPage::class);
Route::get('/contact', ContactPage::class);
Route::get('/club', ClubPage::class);



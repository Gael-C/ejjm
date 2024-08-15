<?php

use App\Livewire\BlogPage;
use App\Livewire\BureauPage;
use App\Livewire\ClubPage;
use App\Livewire\ContactPage;
use App\Livewire\CoursPage;
use App\Livewire\PhotosPage;
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

Route::get('/blog', BlogPage::class)->name('blog');
Route::get('/bureau', BureauPage::class)->name('bureau');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/club', ClubPage::class)->name('club');
Route::get('/photos', PhotosPage::class)->name('photos');
Route::get('/cours', CoursPage::class)->name('cours');





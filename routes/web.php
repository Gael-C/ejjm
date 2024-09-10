<?php

use App\Livewire\ArticlePage;
use App\Livewire\BlogPage;
use App\Livewire\BureauPage;
use App\Livewire\ClubPage;
use App\Livewire\ContactPage;
use App\Livewire\PartenairesPage;
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


Route::get('blog/{slug}',ArticlePage::class)->name('article');
Route::get('/blog', BlogPage::class)->name('blog');
Route::get('/bureau', BureauPage::class)->name('bureau');
Route::get('/', ClubPage::class)->name('club');
Route::get('/contact', ContactPage::class)->name('contact');
Route::get('/partenaires', PartenairesPage::class)->name('partenaires');
Route::get('/photos', PhotosPage::class)->name('photos');





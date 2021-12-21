<?php

use App\Http\Livewire\Advertisements;
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

Route::view('/', 'site')->name('site');

Route::middleware(['auth'])->group(function () {

    Route::view('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/advertisement/create', Advertisements\AdvertisementCreate::class)->name('advertisement-create');
});

require __DIR__.'/auth.php';

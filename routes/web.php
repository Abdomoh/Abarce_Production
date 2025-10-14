<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebSite\LandingPage;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SeetingController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\WebSite\LandingPageController;

Route::get('/', [LandingPageController::class,'index'])->name('landingpage');
Route::post('/', action: [LandingPageController::class,'storeContactForm'])->name('store.contact-form');

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('seetings/edit', [SeetingController::class, 'editSeeting'])->name('seetings.edit');
    Route::post('seetings/update', [SeetingController::class, 'updateSeeting'])->name('seetings.update');
    Route::get('abouts/edit', [AboutController::class, 'editAbout'])->name('abouts.edit');
    Route::post('abouts/update', [AboutController::class, 'updateAbout'])->name('abouts.update');
    Route::resource('services',ServiceController::class);
    Route::resource('clients',ClientController::class);
    Route::resource('testimonials',TestimonialController::class);
    Route::resource('contacts',ContactController::class);


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

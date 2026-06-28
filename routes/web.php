<?php

use App\Http\Controllers\Admin\EnquiryController as AdminEnquiryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home');

Route::get('/about-us', function () {
    return view('frontend.about');
})->name('frontend.about');

Route::get('/gallery', function () {
    return view('frontend.gallery');
})->name('frontend.gallery');

Route::get('/contact-us', function () {
    return view('frontend.contact');
})->name('frontend.contact');

Route::get('/faqs', function () {
    return view('frontend.faqs');
})->name('frontend.faqs');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/courses', [CourseController::class, 'index'])->name('frontend.courses.index');
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('frontend.courses.show');

Route::middleware('auth')->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');

    // settings
    Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.settings.index');
    Route::post('/admin/settings', [SettingController::class, 'update'])->name('admin.settings.update');
});

require __DIR__ . '/auth.php';

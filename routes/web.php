<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\PurchaseRequestController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('courses', [MainController::class, 'courses'])->name('courses');
Route::get('showCourse/{id}', [MainController::class, 'showCourse'])->name('showCourse');
Route::get('teachers', [MainController::class, 'teachers'])->name('teachers');
Route::get('showTeacher/{id}', [MainController::class, 'showTeacher'])->name('showTeacher');
Route::get('contact', [MainController::class, 'contact'])->name('contact');

Route::post('storePurchaseRequest', [PurchaseRequestController::class, 'storePurchaseRequest'])->name('storePurchaseRequest');
    

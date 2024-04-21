<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PurchaseRequestController;
use Illuminate\Routing\RouteGroup;

Route::get('loginPage', [MainController::class, 'loginPage'])->name('loginPage');
Route::post('login', [MainController::class, 'login'])->name('login');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::prefix('dashboard')->name('dashboard.')->group(function(){
    Route::get('courses', [DashboardController::class, 'courses'])->name('courses');
    Route::post('addCourse', [DashboardController::class, 'addCourse'])->name('addCourse');

    Route::get('teachers', [DashboardController::class, 'teachers'])->name('teachers');
    Route::post('addTeacher', [DashboardController::class, 'addTeacher'])->name('addTeacher');

    Route::get('information', [DashboardController::class, 'information'])->name('information');
});

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('courses', [MainController::class, 'courses'])->name('courses');
Route::get('showCourse/{id}', [MainController::class, 'showCourse'])->name('showCourse');
Route::get('teachers', [MainController::class, 'teachers'])->name('teachers');
Route::get('showTeacher/{id}', [MainController::class, 'showTeacher'])->name('showTeacher');
Route::get('contact', [MainController::class, 'contact'])->name('contact');

Route::post('storePurchaseRequest', [PurchaseRequestController::class, 'storePurchaseRequest'])->name('storePurchaseRequest');
    

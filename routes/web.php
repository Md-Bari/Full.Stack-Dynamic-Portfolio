<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public pages
Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/projects', 'projects');
Route::view('/testimonials', 'testimonials');
Route::view('/contact', 'contact');
Route::view('/academic', 'academic');

// Admin Dashboard
Route::view('/admin', 'admin.dashboard');

// Projects CRUD (Create + Store)
Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/admin/projects', [ProjectController::class, 'store'])->name('projects.store');

// Skills CRUD
Route::get('/admin/skills/create', [SkillController::class, 'create'])->name('skills.create');
Route::post('/admin/skills', [SkillController::class, 'store'])->name('skills.store');

// About Section (Edit + Update)
Route::get('/admin/about/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::post('/admin/about/update', [AboutController::class, 'update'])->name('about.update');

// Authentication Routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login.form');

Route::post('/login', [AuthenticationController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register.form');

Route::post('/register', [AuthenticationController::class, 'register'])->name('register');
Route::get('/admin/logout', function () {
    Auth::guard('admin')->logout();
    return redirect()->route('admin.login'); // Change this to your actual admin login route
})->name('admin.logout');
Route::get('/dashboard', function () {
    return view('admin.dashboard');  // points to resources/views/admin/dashboard.blade.php
})->name('dashboard');
Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('admin.logout');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth'); // protect dashboard with auth middleware

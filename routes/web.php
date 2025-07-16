<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AboutController;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/services', 'services');
Route::view('/projects', 'projects');
Route::view('/testimonials', 'testimonials');
Route::view('/contact', 'contact');
Route::view('/academic', 'academic');
// Admin Dashboard


// Admin Dashboard
Route::get('/admin', function () {
    return view('admin.dashboard');
});

// Projects
Route::get('/admin/projects/create', [ProjectController::class, 'create']);
Route::post('/admin/projects', [ProjectController::class, 'store']);

// Skills
Route::get('/admin/skills/create', [SkillController::class, 'create']);
Route::post('/admin/skills', [SkillController::class, 'store']);

// About
Route::get('/admin/about/edit', [AboutController::class, 'edit']);
Route::post('/admin/about/update', [AboutController::class, 'update']);


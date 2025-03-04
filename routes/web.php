<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/resume', function () {
    return Inertia::render('Resume');
})->name('resume');

Route::get('/subscribe', function () {
    return Inertia::render('Subscribe');
})->name('subscribe');

Route::get('/posts/2', function () {
    return Inertia::render('posts/Detail');
})->name('posts.detail');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    echo 123;
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

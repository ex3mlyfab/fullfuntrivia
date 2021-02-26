<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::get('/testing',function(){
    return Inertia::render('Testing');
});
Route::get('/', function(){
    return view('front.great', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});
Route::get('/levels', function(){
    return view('front.levels');
});
Route::get('/levels', function(){
    return view('front.contact');
});
Route::get('/rules', function(){
    return view('front.rules');
});
Route::get('/section', function(){
    return view('front.section');
});
Route::get('/faq', function(){
    return view('front.faq');
});
Route::get('/starter', function(){
    return view('front.starter');
});
Route::get('/bronze', function(){
    return view('front.bronze');
});
Route::get('/silver', function(){
    return view('front.silver');
});
Route::get('/gold', function(){
    return view('front.gold');
});
Route::get('/platinum', function(){
    return view('front.platinum');
});
Route::get('/ghetto', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

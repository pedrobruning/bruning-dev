<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/locale/{lang}', function ($lang) {
    if (in_array($lang, ['en', 'pt-BR'])) {
        Session::put('locale', $lang);
    }
    return redirect()->back();
})->name('locale');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/projects', function () {
    return view('projects.index');
})->name('projects.index');

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    $locale = app()->getLocale();
    $post = \App\Models\Post::where("slug->{$locale}", $slug)
        ->orWhere("slug->en", $slug) // Fallback to EN slug if needed
        ->firstOrFail();
        
    return view('blog.show', compact('post'));
})->name('blog.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

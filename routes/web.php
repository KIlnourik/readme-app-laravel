<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.main');
});


Route::get('/registration', function () {
    return view('pages.auth.registration');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/popular', function () {
    return view('pages.popular');
});

Route::get('/feed', function () {
    return view('pages.feed');
});

Route::get('/user/profile', function () {
    return view('pages.user.profile');
});

Route::get('/posts/{id}', function () {
    return view('pages.posts.post');
});

#TODO Change route to "/posts/create"
Route::get('/create', function () {
    return view('pages.posts.create');
});

Route::get('/user/messages', function () {
    return view('pages.user.messages');
});

Route::get('/search', function () {
    return view('pages.search');
});

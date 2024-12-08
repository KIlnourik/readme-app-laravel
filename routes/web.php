<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;

Route::get('/', MainPageController::class);

Route::middleware('guest')->group(function () {
    Route::get('/registration', [RegisterUserController::class, 'create']);
    Route::post('/registration', [RegisterUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'create']);
});

Route::middleware('auth')->group(function () {
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

    Route::delete('/logout', [SessionController::class, 'destroy']);
});

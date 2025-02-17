<?php

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Homepage');
});

Route::get('/about', function () {
    return Inertia::render('About', [
        'user' => UserResource::make(User::first()),
    ]);
});

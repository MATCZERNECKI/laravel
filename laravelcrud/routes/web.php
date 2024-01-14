<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::resource('Czernecki/310501/people', PeopleController::class);

Route::get('/', function () {
    return view('welcome');
});


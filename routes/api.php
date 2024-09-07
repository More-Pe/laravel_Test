<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return "Students list";
});

Route::get('/students/{id}', function () {
    return "Getting student by id";
});

Route::post('/students', function () {
    return "Creating student";
});

Route::put('/students/{id}', function () {
    return "Updating student";
});

Route::delete('/students/{id}', function () {
    return "Deleting student";
});
<?php

use Illuminate\Support\Facades\Route;

// Route for the homepage
Route::get('/', function () {
    return view('welcome', ["greating" => "This will the value pass the the p tag"]);
});

// Route for /home (static route for displaying names and skills)
Route::get('/home', function () {
    $namesOf = [
        ["name" => "Najeebullah", "skills" => 22, "id" => "1"],
        ["name" => "Nasratullah", "skills" => 55, "id" => "2"],
    ];

    return view('najeeb', ["namesOf" => $namesOf]);
});

// Route for /home/{id} (dynamic route with id)
Route::get('/home/{id}', function ($id) {
    return view('show', ["id" => $id]);
});


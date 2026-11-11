<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {

    $students = [
        ['id' => 1, 'name' => 'Ahmed', 'age' => 20, 'marks' => 85],
        ['id' => 2, 'name' => 'Ali', 'age' => 22, 'marks' => 45],
        ['id' => 3, 'name' => 'Sara', 'age' => 19, 'marks' => 92],
        ['id' => 4, 'name' => 'Hassan', 'age' => 21, 'marks' => 65],
        ['id' => 5, 'name' => 'Ayesha', 'age' => 20, 'marks' => 38]
    ];

    return view('students', compact('students'));
});


// Display registration form
Route::get('/register', function () {
    return view('register');
});

// Receive submitted form
Route::post('/register', function (Request $request) {

    $validated = $request->validate([
        'name' => 'required|string|max:2',
        'email' => 'required|email',
        'age' => 'required|integer|min:15|max:100',
        'course' => 'required|in:Laravel,PHP,Python'
    ]);

    return view('student-details', $validated);
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Display all students
    public function index()
    {
        $students = [
            ['id' => 1, 'name' => 'Ahmed', 'marks' => 85],
            ['id' => 2, 'name' => 'Ali', 'marks' => 45],
            ['id' => 3, 'name' => 'Sara', 'marks' => 92],
            ['id' => 4, 'name' => 'Hassan', 'marks' => 65]
        ];

        return view('students', compact('students'));
    }

    // Display registration form
    public function create()
    {
        return view('register');
    }

    // Handle form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'age' => 'required|integer|min:15|max:100'
        ]);

        return view('student-details', $validated);
    }
}

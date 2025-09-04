<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

public function dashboard()
{
    $user = Auth::user();

    return view('dashboard', [
        'name' => $user->name,
    ]);
}

 public function myCourses()
    {
        return view('dashboard.my-courses'); // My Courses page
    }
    public function learningPath()
{
    return view('dashboard.learning-path');
}
public function assignments()
{
    return view('dashboard.assignments');
}

}

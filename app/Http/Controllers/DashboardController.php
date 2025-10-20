<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        $course = Course::first();
        return view('index', compact('course'));
    }

    public function admin()
    {

        return view('dashboard.admin');

    }

   public function student()
    {
        $course = Course::first();
        return view('dashboard.student', compact('course'));
    }
    public function users()
    {
        $users = User::all();
        return view('backend.users', compact('users'));
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id)->pagination(10);
        $user->delete();

        return redirect()->route('backend.users')->with('success', 'User deleted successfully.');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
class DashboardController extends Controller
{
    public function index(){
        $totalStudents=Student::count();
        $totalusers=User::count();
        $allStudent= Student::all();
        return view('admin.dashboard',compact('totalStudents','totalusers','allStudent'));
    }
}



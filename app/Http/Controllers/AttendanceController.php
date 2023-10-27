<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;

class AttendanceController extends Controller
{
    
    public function index() {

        $data = Employee::with('attendance')->get();

        return view('attendance',compact('data'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;

class EmployeeController extends Controller
{
    
    public function index() {

        $data = Employee::with('position','department')->get();

        return view('employee',compact('data'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;

class DepartmentController extends Controller
{
    
    public function index() {

        $department = Department::get();

        return view('department',compact('department'));
    }

}

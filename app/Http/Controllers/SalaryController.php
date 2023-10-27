<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Salary;

class SalaryController extends Controller
{
    
    public function index() {

        $data = Salary::with('position')->get();

        return view('salary',compact('data'));
    }

}

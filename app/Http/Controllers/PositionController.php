<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Position;
use App\Models\Department;

class PositionController extends Controller
{
    
    public function index() {

        $position = Position::with(['department'])->get();
        $department = Department::get()->pluck('name','id')->toArray();
        $department = json_encode($department);

        return view('position',compact('position','department'));
    }

}

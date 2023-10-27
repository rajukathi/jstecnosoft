<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Attendance extends Model
{
    protected $table = "attendance";
    protected $guarded = [];


    public function employee()
    {
        return $this->belongsTo(Employee::class); 
    }
}

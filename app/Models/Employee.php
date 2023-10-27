<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{Department,Position,Attendance};

class Employee extends Model
{
    protected $table = "employee";
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class); 
    }

    public function position()
    {
        return $this->belongsTo(Position::class); 
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class); 
    }
}

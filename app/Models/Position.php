<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Position extends Model
{
    protected $table = "position";
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo(Department::class); 
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Position;

class Salary extends Model
{
    protected $table = "salary";
    protected $guarded = [];

    public function position()
    {
        return $this->belongsTo(Position::class); 
    }
}

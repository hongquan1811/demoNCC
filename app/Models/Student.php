<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function classroom()
    {
        return $this->belongsTo(Classroom::class,'classroom_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(School::class,'school_id', 'id');
    }
    public function mentor()
    {
        return $this->belongsTo(Mentor::class,'mentor_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $with = ['parents', 'courses'];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function parents()
    {
        return $this->belongsToMany(Guardian::class, 'parent_student', 'student_id', 'parent_id');
    }
}

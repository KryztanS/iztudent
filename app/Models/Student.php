<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'contact_number', 'email', 'address'];

    protected $with = ['parents', 'courses'];

    public function scopeFilter($query, string $search = null)
    {
        $query->when(
            $search ?? false,
            fn ($query, $search) =>
            $query->where(
                fn ($query) =>
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('contact_number', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('address', 'like', '%' . $search . '%')
            )
        );
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function parents()
    {
        return $this->belongsToMany(Guardian::class, 'parent_student', 'student_id', 'parent_id');
    }
}

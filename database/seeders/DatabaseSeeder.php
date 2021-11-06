<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Basic Math',
        ]);
        Course::create([
            'name' => 'Advance Math',
        ]);
        Course::create([
            'name' => 'Advance++ Math',
        ]);

        Student::factory(3)->create();
        Guardian::factory(3)->create();

        CourseStudent::create([
            'student_id' => 1,
            'course_id' => 1,
        ]);
        CourseStudent::create([
            'student_id' => 1,
            'course_id' => 2,
        ]);
        CourseStudent::create([
            'student_id' => 2,
            'course_id' => 2,
        ]);
        CourseStudent::create([
            'student_id' => 2,
            'course_id' => 3,
        ]);
    }
}

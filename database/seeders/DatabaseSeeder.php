<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Guardian;
use App\Models\GuardianStudent;
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

        Student::factory(8)->create();
        Guardian::factory(8)->create();

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

        GuardianStudent::create([
            'student_id' => 1,
            'parent_id' => 1,
        ]);
        GuardianStudent::create([
            'student_id' => 1,
            'parent_id' => 2,
        ]);
        GuardianStudent::create([
            'student_id' => 2,
            'parent_id' => 2,
        ]);
        GuardianStudent::create([
            'student_id' => 2,
            'parent_id' => 3,
        ]);

        // More

        CourseStudent::create([
            'student_id' => 3,
            'course_id' => 1,
        ]);
        CourseStudent::create([
            'student_id' => 3,
            'course_id' => 2,
        ]);
        CourseStudent::create([
            'student_id' => 4,
            'course_id' => 2,
        ]);
        CourseStudent::create([
            'student_id' => 4,
            'course_id' => 3,
        ]);
        GuardianStudent::create([
            'student_id' => 3,
            'parent_id' => 1,
        ]);
        GuardianStudent::create([
            'student_id' => 3,
            'parent_id' => 2,
        ]);
        GuardianStudent::create([
            'student_id' => 4,
            'parent_id' => 2,
        ]);
        GuardianStudent::create([
            'student_id' => 4,
            'parent_id' => 3,
        ]);

        CourseStudent::create([
            'student_id' => 5,
            'course_id' => 1,
        ]);
        CourseStudent::create([
            'student_id' => 5,
            'course_id' => 2,
        ]);
        CourseStudent::create([
            'student_id' => 6,
            'course_id' => 2,
        ]);
        CourseStudent::create([
            'student_id' => 6,
            'course_id' => 3,
        ]);
        GuardianStudent::create([
            'student_id' => 5,
            'parent_id' => 1,
        ]);
        GuardianStudent::create([
            'student_id' => 5,
            'parent_id' => 2,
        ]);
        GuardianStudent::create([
            'student_id' => 6,
            'parent_id' => 2,
        ]);
        GuardianStudent::create([
            'student_id' => 6,
            'parent_id' => 3,
        ]);

        CourseStudent::create([
            'student_id' => 7,
            'course_id' => 1,
        ]);
        CourseStudent::create([
            'student_id' => 7,
            'course_id' => 2,
        ]);
        CourseStudent::create([
            'student_id' => 8,
            'course_id' => 2,
        ]);
        CourseStudent::create([
            'student_id' => 8,
            'course_id' => 3,
        ]);
        GuardianStudent::create([
            'student_id' => 7,
            'parent_id' => 1,
        ]);
        GuardianStudent::create([
            'student_id' => 7,
            'parent_id' => 2,
        ]);
        GuardianStudent::create([
            'student_id' => 8,
            'parent_id' => 2,
        ]);
        GuardianStudent::create([
            'student_id' => 8,
            'parent_id' => 3,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurriculumSeeder extends Seeder
{
    public function run()
    {
        DB::table('curriculums')->insert([
            [
                'curriculum_year' => 2024,
                'program_code' => 'CS101',
                'program_name' => 'Computer Science',
                'course_code' => 'CS101',
                'course_name' => 'Introduction to Computer Science',
                'lec' => 3,
                'lab' => 2,
                'units' => 4,
                'level' => '1st Year',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'curriculum_year' => 2024,
                'program_code' => 'IT101',
                'program_name' => 'Information Technology',
                'course_code' => 'IT101',
                'course_name' => 'Introduction to Information Technology',
                'lec' => 3,
                'lab' => 2,
                'units' => 4,
                'level' => '1st Year',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'curriculum_year' => 2024,
                'program_code' => 'IT ELEC',
                'program_name' => 'IT ELECTIVE',
                'course_code' => 'IT ELEC',
                'course_name' => 'Introduction to Usability',
                'lec' => 3,
                'lab' => 2,
                'units' => 4,
                'level' => '1st Year',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more entries as needed
        ]);
    }
}

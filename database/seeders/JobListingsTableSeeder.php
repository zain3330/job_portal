<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('job_listings')->insert([
            'title' => 'Software Developer',
            'category' => 'IT',
            'job_nature' => 'Full-time',
            'vacancy' => 3,
            'salary' => '50000',
            'location' => 'New York',
            'description' => 'Develop and maintain web applications.',
            'benefits' => 'Health insurance, Paid time off',
            'responsibility' => 'Writing clean, scalable code.',
            'qualifications' => 'Bachelor\'s degree in Computer Science.',
            'keywords' => 'software, developer, IT',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'job_start'=>'2023-01-01',
            'job_finish'=>null,
            'company_name'=>'Azerbaijan Radio and Telecommunication Company',
            'job_description'=>'Full-stack developing and Helpdesk'
        ]);
        Experience::create([
            'job_start'=>'2024-09-01',
            'job_finish'=>'2024-09-30',
            'company_name'=>'Portalgames',
            'job_description'=>'Laravel developer '
        ]);
    }
}

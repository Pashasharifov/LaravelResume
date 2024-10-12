<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'start_edu'=>'2020-09-15',
            'end_edu'=>'2024-05-31',
            'school_name'=>'Khazar University',
            'school_description'=>'Computer Engineering Bachelor degree'
          ])  ;
          Education::create([
            'start_edu'=>'2024-09-15',
            'end_edu'=>'2026-05-31',
            'school_name'=>'Azerbaijan State Oil and Industry University',
            'school_description'=>'Computer Engineering Master degree'
          ])  ;
    }
}

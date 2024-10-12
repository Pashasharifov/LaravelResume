<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          Skills::create([
            'name'=>'CSS',
            'skills_percent'=>'85'
        ]);
       Skills::create([
            'name'=>'SQL',
            'skills_percent'=>'83'
        ]);
      
         Skills::create([
            'name'=>'Javascript',
            'skills_percent'=>'90'
        ]);
        Skills::create([
            'name'=>'PHP',
            'skills_percent'=>'95'
        ]);
       
         Skills::create([
            'name'=>'LARAVEL',
            'skills_percent'=>'80'
        ]);
       
         Skills::create([
            'name'=>'HTML',
            'skills_percent'=>'99'
        ]);
        
        
    }
}

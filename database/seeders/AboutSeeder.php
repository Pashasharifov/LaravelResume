<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'PASHA SHARIFOV',
            'phone_number'=>'0553216774',
            'email'=>'Sharifffov@gmail.com',
            'website'=>'https://github.com/Pashasharifov',
            'address'=>'Baku, Nizami'
        ]);
    }
}

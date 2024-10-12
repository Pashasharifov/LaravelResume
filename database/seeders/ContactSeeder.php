<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'social_name'=>'linkedn',
            'social_url'=>'https://www.linkedin.com/in/pasha-sharifov-67b115253/'

        ]);
        Contact::create([
            'social_name'=>'instagram',
            'social_url'=>'https://www.instagram.com/pasharifov_/'

        ]);
        Contact::create([
            'social_name'=>'facebook',
            'social_url'=>'#'

        ]);
    }
}

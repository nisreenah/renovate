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
            'name' => 'Renovate',
            'phone' => '+123 456 789 33',
            'email' => 'Innovate@gmail.com',
            'address' => '3 innovate Street, NY United States of America',
            'description' => 'Innovate Architects is a full-service design firm providing architecture architecture.',
            'our_story' => 'Our story is rooted in passion, creativity, and a commitment to excellence. We started as a small team of individuals with a shared love for interior design and a vision to transform spaces into inspiring environments.',
            'logo' => 'logo.jpg',
            'header_image' => 'header_image.jpg',
            'image_one' => 'image_one.jpg',
            'image_two' => 'image_two.jpg',
        ]);
    }
}

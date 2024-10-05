<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'judul' => 'Company',
            'subjudul' => 'logo.png',
            'deskripsi_1' => 'Lorem ipsum',
            'deskripsi_2' => 'Lorem ipsum',
            'kelebihan_1' => 'Lorem ipsum',
            'kelebihan_2' => 'Lorem ipsum',
            'kelebihan_3' => 'Lorem ipsum',
            'kelebihan_4' => 'Lorem ipsum',
            'kelebihan_5' => 'Lorem ipsum',
            'kelebihan_6' => 'Lorem ipsum',
            'kelebihan_7' => 'Lorem ipsum',
            'kelebihan_8' => 'Lorem ipsum',
            'kelebihan_9' => 'Lorem ipsum',
            'photo'=>'logo.png'
        ]);
    }
}

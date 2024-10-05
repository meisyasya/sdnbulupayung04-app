<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Visi;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visi::create([
            'judul' => 'Company',
            'deskripsi_1' => 'Lorem ipsum',
            'deskripsi_2' => 'Lorem ipsum',
            'photo'=>'logo.png'
        ]);
    }
}

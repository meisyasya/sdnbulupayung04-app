<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DataSingkat;

class DataSingkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DataSingkat::create([
            'siswa' => '316',
            'guru' => '12',
            'tenagakependidikan' => '3',
            
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ResepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resep')->insert([
            [
                'nama_resep' => 'Nasi Goreng Buatan Alifa',
                'vidio' => 'https://www.youtube.com/watch?v=8ZjtrOktGr0',
                'deskripsi' => 'Nasi goreng adalah makanan sejuta umat dan penyelamat dari kelaparan',
                'alat' => 'dua buah panci dan 1 wajan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_resep' => 'Soto Betawi buatan alifa',
                'vidio' => 'https://www.youtube.com/watch?v=8ZjtrOktGr0',
                'deskripsi' => 'Soto betawi adalah makanan khas betawi yang sangat legit',
                'alat' => 'satu kuali besar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama_resep' => 'Nasi Rendang Alifa',
                'vidio' => 'https://www.youtube.com/watch?v=8ZjtrOktGr0',
                'deskripsi' => 'Nasi goreng adalah makanan sejuta umat dan penyelamat dari kelaparan',
                'alat' => 'Sodet dan Pisau',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

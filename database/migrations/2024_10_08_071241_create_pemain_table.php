<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemain')->insert([
            [
                'nama_pemain' => 'Cristiano Ronaldo',
                'no_punggung' => 7,
                'posisi' => 'Forward',
            ],
            [
                'nama_pemain' => 'Lionel Messi',
                'no_punggung' => 10,
                'posisi' => 'Forward',
            ],
            [
                'nama_pemain' => 'Neymar Jr',
                'no_punggung' => 11,
                'posisi' => 'Forward',
            ],
            [
                'nama_pemain' => 'Luka Modric',
                'no_punggung' => 10,
                'posisi' => 'Midfielder',
            ],
            [
                'nama_pemain' => 'Sergio Ramos',
                'no_punggung' => 4,
                'posisi' => 'Defender',
            ],
        ]);
    }
}
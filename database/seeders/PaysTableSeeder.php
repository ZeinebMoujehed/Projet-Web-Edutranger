<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pays')->insert([
            ['nom' => 'France'],
            ['nom' => 'Espagne'],
            ['nom' => 'Italie'],
            ['nom' => 'Allemagne'],
        ]);
    }

}

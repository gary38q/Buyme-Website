<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hadiahs')->insert([
            [
                'Hadiah' => 'Motor Fino Classic',
                'Jumlah' => 1
            ],
            [
                'Hadiah' => 'Xiaomi Redmi Go',
                'Jumlah' => 6
            ],
            [
                'Hadiah' => 'Panci Steamer',
                'Jumlah' => 10
            ],
            [
                'Hadiah' => 'Kipas',
                'Jumlah' => 10
            ]
        ]);
    }
}

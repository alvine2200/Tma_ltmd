<?php

namespace Database\Seeders;

use App\Models\EyeColor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EyeColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eyecolor=[
            ['name'=>'Amber'],
            ['name'=>'Black'],
            ['name'=>'Blue'],
            ['name'=>'Green'],
            ['name'=>'Blue-Green'],
            ['name'=>'Blue-Grey'],
            ['name'=>'Brown'],
            ['name'=>'Hazel'],
        ];

        EyeColor::firstOrCreate($eyecolor);
    }
}

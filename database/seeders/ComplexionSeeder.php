<?php

namespace Database\Seeders;

use App\Models\Complexion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplexionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $complexion=[
            ['name'=>'Very Dark'],
            ['name'=>'Dark'],
            ['name'=>'Dark Chocolate'],
            ['name'=>'Chocolate'],
            ['name'=>'light'],
            ['name'=>'Very light'],
        ];

        Complexion::firstOrCreate($complexion);
    }
}

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
        Complexion::upsert([
            ['name'=>'Very Dark'],
            ['name'=>'Dark'],
            ['name'=>'Dark Chocolate'],
            ['name'=>'Chocolate'],
            ['name'=>'light'],
            ['name'=>'Very light'],
        ],
        
        ['name']);

        
    }
}

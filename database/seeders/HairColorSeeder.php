<?php

namespace Database\Seeders;

use App\Models\HairColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HairColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HairColor::upsert([
            ['name'=>'Black 1'],
            ['name'=>'Black 2'],
            ['name'=>'Brown'],
            ['name'=>'Blonde'],
            ['name'=>'Red'],
            ['name'=>'Grey'],
            ['name'=>'White'],
        ],['name']);
    }
}

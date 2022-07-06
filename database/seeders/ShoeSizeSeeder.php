<?php

namespace Database\Seeders;

use App\Models\ShoeSize;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShoeSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ShoeSize::insert([
            ['name'=>'34'],
            ['name'=>'34.5'],
            ['name'=>'35'],
            ['name'=>'35.5'],
            ['name'=>'36'],
            ['name'=>'36.5'],
            ['name'=>'37'],
            ['name'=>'37.5'],
            ['name'=>'38'],
            ['name'=>'38.5'],
            ['name'=>'39'],
            ['name'=>'39.5'],
            ['name'=>'40'],
            ['name'=>'40.5'],
            ['name'=>'41'],
            ['name'=>'41.5'],
            ['name'=>'42'],
            ['name'=>'42.5'],
            ['name'=>'43'],
            ['name'=>'43.5'],
            ['name'=>'44'],
            ['name'=>'44.5'],
            ['name'=>'45'],
            ['name'=>'45.5'],
            ['name'=>'46'],

        ],['name']);
    }
}

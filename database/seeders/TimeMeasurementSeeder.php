<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Time_Measurement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TimeMeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time_measurements=[
            ['name'=>'This week'],
            ['name'=>'This month'],
            ['name'=>'Three Months ago'],
            ['name'=>'About six month ago'],
            ['name'=>'About one year ago'],
            ['name'=>'More than one year ago'],
            ['name'=>'Not sure'],
        ];

        Time_Measurement::firstOrCreate($time_measurements);
    }
}

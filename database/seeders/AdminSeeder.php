<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=User::firstOrCreate([
            'name'=>'System Admin',
            'email'=>'SystemAdmin@gmail.com',
            'password'=>bcrypt('admin@2022'),
        ]);
    }
}

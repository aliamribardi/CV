<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        User::create([
            'name' => 'Aliamri Bardi',
            'username' => 'aliamri-bardi',
            'email' => 'aliamri@gmail.com',
            'password' => bcrypt('aliamrib'),
        ]);
    }
}

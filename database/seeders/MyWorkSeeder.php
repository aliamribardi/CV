<?php

namespace Database\Seeders;

use App\Models\MyWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MyWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MyWork::create([
            'user_id' => 1,
            'name' => 'Project 1',
            'image' => 'my-work-image/JYhc9rfXabDKBPXS7YUcjbEtL0pZt1NJsh5SEOAO.jpg',
        ]);

        MyWork::create([
            'user_id' => 1,
            'name' => 'Project 2',
            'image' => 'my-work-image/DJnuTEEZTioK5tbfYbONAh9ONbHkJmhs2cYhKc7k.jpg',
        ]);
    }
}

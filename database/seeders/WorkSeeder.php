<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Work::create([
            'user_id' => 1,
            'company' => 'Celebes TV',
            'position' => 'Camera Man',
            'year_of_entry' => '2012',
            'year_out' => '2013',
        ]);
    }
}

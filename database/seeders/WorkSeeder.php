<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

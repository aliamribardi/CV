<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'user_id' => 1,
            'school' => 'SMKN 1 PINRANG',
            'program_Study' => 'Multimedia',
            'year' => '2012',
        ]);

        Education::create([
            'user_id' => 1,
            'school' => 'STMIK DP',
            'program_Study' => 'Teknik Informatika',
            'year' => '2014',
        ]);
    }
}

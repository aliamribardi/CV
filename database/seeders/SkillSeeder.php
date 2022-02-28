<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'user_id' => 1,
            'skill' => 'PHP',
            'percent' => '70',
        ]);

        Skill::create([
            'user_id' => 1,
            'skill' => 'Java Script',
            'percent' => '50',
        ]);

        Skill::create([
            'user_id' => 1,
            'skill' => 'Adobe PhotoShop',
            'percent' => '70',
        ]);

        Skill::create([
            'user_id' => 1,
            'skill' => 'Adobe Primier',
            'percent' => '60',
        ]);
    }
}

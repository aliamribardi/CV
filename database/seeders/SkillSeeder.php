<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

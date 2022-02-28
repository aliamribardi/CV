<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'user_id' => 1,
            'address' => 'Jl Pelita Raya',
            'phone_number' => '082345122229',
            'image' => 'about-image/7jmsX1ykEnm4TkUCB4ISYetYkCpnpaS7UXCofOy6.jpg',
            'about_me' => 'Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you havent found it yet, keep looking. Dont settle. As with all matters of the heart, youll know when you find it.Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you havent found it yet, keep looking. Dont settle. As with all matters of the heart, youll know when you find it.Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you havent found it yet, keep looking. Dont settle. As with all matters of the heart, youll know when you find it.',
        ]);
    }
}

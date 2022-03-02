<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable(); 
            $table->string('google_plus')->nullable(); 
            $table->string('linkedin')->nullable(); 
            $table->string('instagram')->nullable(); 
            $table->string('dribbble')->nullable(); 
            $table->string('skype')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_media');
    }
};

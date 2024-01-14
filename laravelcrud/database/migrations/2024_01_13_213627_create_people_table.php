<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;


return new class extends Migration
{

    public function up()
{
    Schema::create('people', function (Blueprint $table) {
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('phone_number', 20);
        $table->string('street');
        $table->string('city');
        $table->timestamps();
    });
}


    

    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};

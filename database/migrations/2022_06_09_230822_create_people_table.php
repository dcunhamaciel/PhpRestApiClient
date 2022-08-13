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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->unique();
            $table->string('height', 60);
            $table->string('mass', 60);
            $table->string('hair_color', 60);
            $table->string('skin_color', 60);
            $table->string('eye_color', 60);
            $table->string('birth_year', 60);
            $table->string('gender', 60);
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
        Schema::dropIfExists('people');
    }
};

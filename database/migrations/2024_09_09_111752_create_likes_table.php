<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('img2');
            $table->string('img3');
            $table->string('name');
            $table->string('about');
            $table->string('type');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('width');
            $table->integer('height');
            $table->integer('weight');
            $table->string('country');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};

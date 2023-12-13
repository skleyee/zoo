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
        Schema::create('organisms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('gender');
            $table->integer('satiety');
            $table->integer('age');
            $table->boolean('isAlive');
            $table->boolean('isToxic');
            $table->string('reproductionType')->nullable()->default(null);;
            $table->string('foodType')->nullable()->default(null);;
            $table->json('biography')->nullable();
            $table->unsignedBigInteger('enclosure_id')->nullable()->default(null);;
            $table->foreign('enclosure_id')->references('id')->on('enclosures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisms');
    }
};

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
        Schema::create('enclosures', function (Blueprint $table) {
            $table->id();
            $table->boolean('isOpen');
            $table->boolean('isUnlocked');
            $table->boolean('haveRoof');
            $table->integer('foodAmount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enclosures');
    }
};

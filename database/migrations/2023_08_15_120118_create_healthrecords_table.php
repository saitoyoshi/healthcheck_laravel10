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
        Schema::create('healthrecords', function (Blueprint $table) {
            $table->id();
            $table->integer('physical_condition');
            $table->integer('mood_state');
            $table->integer('back_pain');
            $table->integer('eyestrain');
            $table->integer('headache');
            $table->date('recording_date')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('healthrecords');
    }
};

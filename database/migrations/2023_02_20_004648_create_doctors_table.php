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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name') ->nullable();
            $table->string('phone') ->nullable();
            $table->string('room') ->nullable();
            $table->string('time') ->nullable();
            $table->string('holyday') ->nullable();
            $table->string('speaciality') ->nullable();
            $table->string('photo') ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};

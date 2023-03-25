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
        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->string('logo') -> default('logo.png');
            $table->string('copy') -> default('2020 Health Care Center. All right reserved');
            $table->string('search')-> default('');
            $table->string('title') -> default('Health Care Center');
            $table->string('tagline') -> default('Being With You');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};

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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('subjudul');
            $table->string('deskripsi_1');
            $table->string('deskripsi_2');
            $table->string('kelebihan_1');
            $table->string('kelebihan_2');
            $table->string('kelebihan_3');
            $table->string('kelebihan_4');
            $table->string('kelebihan_5');
            $table->string('kelebihan_6');
            $table->string('kelebihan_7');
            $table->string('kelebihan_8');
            $table->string('kelebihan_9');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};

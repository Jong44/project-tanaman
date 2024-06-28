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
        Schema::create('tanamen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->string('nama_latin');
            $table->json('images');
            $table->longText('video');
            $table->json('taksanomi');
            $table->longText('deskripsi');
            $table->longText('asalsebaran');
            $table->longText('habitat');
            $table->longText('morfologi');
            $table->longText('manfaat');
            $table->string('sumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanamen');
    }
};

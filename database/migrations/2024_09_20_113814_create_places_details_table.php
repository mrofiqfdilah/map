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
        Schema::create('places_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('place_id');
            $table->text('description'); // Deskripsi tempat
            $table->string('address'); // Alamat tempat
            $table->decimal('latitude', 10, 8); // Menyimpan latitude tempat
            $table->decimal('longitude', 11, 8); // Menyimpan longitude tempat
            $table->timestamps();

            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places_details');
    }
};

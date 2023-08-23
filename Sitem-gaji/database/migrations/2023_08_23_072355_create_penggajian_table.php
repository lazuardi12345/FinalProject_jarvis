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
        Schema::create('penggajian', function (Blueprint $table) {
            $table->id();
            $table->string('potongan');
            $table->unsignedBigInteger('id_employee');
            $table->unsignedBigInteger('id_tunjangan');
            $table->unsignedBigInteger('id_divisi');
            $table->timestamps();

            $table->foreign('id_employee')->references('id')->on('employee')->onDelete('cascade');

            $table->foreign('id_tunjangan')->references('id')->on('tunjangan')->onDelete('cascade');

            $table->foreign('id_divisi')->references('id')->on('divisi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggajian');
    }
};

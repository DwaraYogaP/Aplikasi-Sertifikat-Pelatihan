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
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->increments('id');
            // $table->unsignedInteger('id_pelatihan');
            $table->string('nomor_sertifikat');
            $table->date('tgl_diterbitkan');
            $table->string('font');
            $table->enum('ukuran_kertas', ['A4', 'F4']);
            $table->enum('orientasi', ['landscape', 'portrait']);
            $table->timestamps('created_at');
            $table->timestamps('updated_at');

        });

        // Schema::table('sertifikat', function($table) {
        //     $table->foreign('id_pelatihan')->references('id_pelatihan')->on('pelatihan');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikat');
    }
};

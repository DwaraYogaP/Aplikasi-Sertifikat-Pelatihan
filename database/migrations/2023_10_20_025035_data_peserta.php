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
        Schema::create('data_peserta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            
        });

        // Schema::table('data_peserta', function($table) {
        //     $table->foreign('id_pelatihan')->references('id_pelatihan')->on('pelatihan');
        //     $table->foreign('id_user')->references('id_pelatihan')->on('pelatihan');

        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_peserta');
    }
};

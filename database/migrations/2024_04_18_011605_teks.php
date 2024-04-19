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
        Schema::create('teks', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->foreign('id_forum')->references('id')->on('forum_komunitas');
            $table->datetime('tanggal_teks');
            $table->string('konten', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('up_vote', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->foreign('id_users')->references('id')->on('users');
            $table->foreign('id_postingan')->references('id')->on('postingan');
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

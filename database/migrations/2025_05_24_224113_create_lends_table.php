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
        Schema::create('lends', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('user_id');
            $table->string('ISBN');

            $table->date('loanDate');
            $table->string('expirationDate');
            $table->string('returnDate');
            $table->string('status');
            
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('ISBN')->references('ISBN ')->on('books');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lends');
    }
};

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
        Schema::create('books', function (Blueprint $table) {
            $table->string('ISBN');
            $table->string('title');
            $table->string('editorial');
            $table->string('yearPublication');
            $table->string('genre');
            $table->integer('numberPages');
            $table->integer('totalQuantity');
            $table->integer('availableQuantity');
            $table->primary('ISBN');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

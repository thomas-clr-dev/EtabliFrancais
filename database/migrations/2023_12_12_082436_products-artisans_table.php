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
        Schema::create('products-artisans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_id')->unique();
            $table->unsignedBigInteger('artisans_id');
            $table->timestamps();

            $table->foreign('products_id')->references('id')->on('products');
            $table->foreign('artisans_id')->references('id')->on('artisans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products-artisans');
    }
};

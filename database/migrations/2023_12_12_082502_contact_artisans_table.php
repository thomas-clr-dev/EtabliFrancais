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
        Schema::create('contact_artisans', function (Blueprint $table) {
            $table->id();
            $table->string('lastname', 100);
            $table->string('firstname', 100);
            $table->string('email', 191)->unique();
            $table->string('phone', 10);
            $table->string('address', 255);
            $table->string('address_complement', 255);
            $table->string('message', 255);
            $table->unsignedInteger('artisans_id');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();

            $table->foreign('artisans_id')->references('id')->on('artisans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_artisans');
    }
};

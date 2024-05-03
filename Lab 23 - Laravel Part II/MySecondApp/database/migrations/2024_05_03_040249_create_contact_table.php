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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->default('null');
            $table->string('lastname')->default('null');
            $table->string('email')->default('null');
            $table->string('contact')->default('null');
            $table->string('subject')->default('null');
            $table->string('message')->default('null');
            $table->string('ip')->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};

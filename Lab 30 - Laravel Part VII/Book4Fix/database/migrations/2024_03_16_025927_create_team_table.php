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
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 200);
            $table->string('email', 200)->unique();
            $table->string('designation', 200);
            $table->string('shortintro', 200);
            $table->text('longintro');
            $table->string('linkedin', 100);
            $table->string('insta', 100);
            $table->string('twitter', 100);
            $table->string('facebook', 100);
            $table->string('image', 1000);
            $table->boolean('status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};

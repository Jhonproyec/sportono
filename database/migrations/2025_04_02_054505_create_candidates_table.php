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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->date('date_birth');
            $table->string('sexo');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('province');
            $table->string('city');
            $table->text('comment')->nullable();
            $table->text('cv')->nullable();
            $table->text('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};

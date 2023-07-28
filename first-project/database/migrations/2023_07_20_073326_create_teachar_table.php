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
        Schema::create('teachar', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->string('name', 20);
            $table->string('email', 20);
            $table->text('adress');
            $table->enum('gender' ,["m","f","0"]);
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachar');
    }
};

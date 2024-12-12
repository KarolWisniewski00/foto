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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(); // Nazwa może być null
            $table->string('copies_start')->nullable(); // Ilość odbitek start
            $table->string('copies_end')->nullable();   // Ilość odbitek end
            $table->string('price')->nullable();  // Cena
            $table->boolean('type')->default(false);     // Typ (domyślnie false)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

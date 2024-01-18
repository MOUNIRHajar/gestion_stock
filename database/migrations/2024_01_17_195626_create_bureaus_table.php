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
        Schema::create('bureaus', function (Blueprint $table) {
            $table->id('id_bureau');
            $table->foreignId('id_utilisateur')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('nom');
            $table->string('typeB');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bureaus');
    }
};

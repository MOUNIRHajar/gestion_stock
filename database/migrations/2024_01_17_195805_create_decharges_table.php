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
        Schema::create('decharges', function (Blueprint $table) {
            $table->id('id_decharge');
            $table->foreignId('id_Demande')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantite_sortie');
            $table->date('date_sortie');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decharges');
    }
};

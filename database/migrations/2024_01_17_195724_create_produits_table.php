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
        Schema::create('produits', function (Blueprint $table) {
            $table->id('id_produit');
            $table->foreignId('id_stocke')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('numserie');
            $table->string('numinv');
            $table->boolean('fondus');
            $table->string('tribunal');
            $table->integer('nbr_maintenance');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};

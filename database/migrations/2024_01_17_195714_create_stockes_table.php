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
        Schema::create('stockes', function (Blueprint $table) {
            $table->id('id_stocke');
            $table->integer('qts');
            $table->foreignId('id_souscategories')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('qtE');
            $table->string('model');
            $table->string('name');
            $table->float('prix');
            $table->integer('garantie');
            $table->foreignId('id_achat')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockes');
    }
};

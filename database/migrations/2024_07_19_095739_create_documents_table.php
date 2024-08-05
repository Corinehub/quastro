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
        Schema::create('documents', function (Blueprint $table) {
            $table->id("id");
            $table->string("Intitulé");
            $table->string("Type");
            $table->foreign('dao_id')->references('id')->on('dao')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Souscrire_DAO_id')->references('id')->on('Souscrire')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Souscrire_Prestataire_id')->references('id')->on('Souscrire')->onDelete('cascade')->onUpdate('cascade');
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};

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
        Schema::create('phases_projets', function (Blueprint $table) {
            $table->id("id");
            $table->string("Titre");
            $table->date("Début");
            $table->date("Fin");
            $table->date("Budget");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phases_projets');
    }
};

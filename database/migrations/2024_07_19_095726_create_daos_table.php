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
        Schema::create('daos', function (Blueprint $table) {
            $table->id("id");
            $table->string("Type");
            $table->date("Date de Publication");
            $table->date("Date limite");
            $table->string("Etat"); 
            $table->foreign('Architecte_id')->references('id')->on('Architecte')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_a_o_s');
    }
};

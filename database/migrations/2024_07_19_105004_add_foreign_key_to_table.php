<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPostsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * 
     */
    public function up(): void
    {
        Schema::table('Contenir', function (Blueprint $table) {
            $table->foreign('dao_id')->references('id')->on('dao')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lot_id')->references('id')->on('lot')->onDelete('cascade')->onUpdate('cascade');
            $table->primary('dao_arhitecte_id')->references('id')->on('contenir');
            $table->unsignedBigInteger('dao_id');//ajouter la colonne dao_id
            $table->unsignedBigInteger('lot_id');
            $table->unsignedBigInteger('dao_architecte_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Contenir', function (Blueprint $table) {
            //
        });
    }
};

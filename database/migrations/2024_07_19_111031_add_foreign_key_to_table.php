<?php

use App\Models\souscrire;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPostsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('Soustrire', function (Blueprint $table) {
            $table->foreign('dao_id')->references('id')->on('dao')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('prestatire_id')->references('id')->on('prestatire')->onDelete('cascade')->onUpdate('cascade');
            $table->primary('dao_architecte_id')->references('id')->on('souscrire');
            $table->unsignedBigInteger('dao_id');//ajouter la colonne dao_id
            $table->unsignedBigInteger('prestataire_id');
            $table->unsignedBigInteger('dao_architecte_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Soustrire', function (Blueprint $table) {
            //
        });
    }
};

<?php

use App\Models\Lot;
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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment("Phase du projet");
            $table->enum('domaine',['ENTREVUE','ETUDE','EXECUTION','ENTRETIEN']);
            $table->longText('description')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('end_at')->nullable();
            $table->string('color', 8)->default('#65B724');
            $table->double('price')->default(0);

            // $table->integer('projets_id')->nullable();
            $table->foreignIdFor(Lot::class);
            // $table->integer('creator_id')->default(0); // 0 si generé par le system

            // $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
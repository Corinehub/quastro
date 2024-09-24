<?php

use App\Models\dao;
use App\Models\Provider;
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
        Schema::table('subscribes', function (Blueprint $table) {
            $table->id("id");
            $table->foreignIdFor(dao::class);
            $table->foreignIdFor(Provider::class);
            $table->timestamps();
            $table->timestamp("validated_at");
            // $table->unsignedBigInteger('dao_id');//ajouter la colonne dao_id
            // $table->unsignedBigInteger('providers_id');
           

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscribes');
    }
};

<?php

use App\Models\dao;
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
        Schema::create('dao_documents', function (Blueprint $table) {
            $table->id("id");
            $table->string("type");
            $table->string("link");
            $table->foreignIdFor(dao::class);
            // $table->foreignIdFor(subscribe::class);
            $table->timestamps();
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dao_documents');
    }
};

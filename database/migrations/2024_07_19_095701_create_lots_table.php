<?php

use App\Models\Dao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255);
            $table->string('guid', 255)->unique()->nullable();
            $table->string('slug', 255)->nullable();
            $table->longText('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('color', 8)->nullable()->default('#65B724');
            $table->foreignIdFor(Dao::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        // Schema::table('lots', function (Blueprint $table) {
        //     $table->dropForeign(['daos_id']);
        // });

        Schema::dropIfExists('lots');

    }
};
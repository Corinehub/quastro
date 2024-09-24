<?php

use App\Models\Subscribe;
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
        Schema::create('dao_payments', function (Blueprint $table) {
            $table->id("id");
            $table->string("name");
            $table->float("cost");
            $table->boolean("state");
            $table->timestamp("payment_at");
            $table->foreignIdFor(Subscribe::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dao_payments');
    }
};

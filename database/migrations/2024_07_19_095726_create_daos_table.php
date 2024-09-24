<?php

use App\Models\Worker;
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
            $table->string("name");
            $table->datetimes("start_at");
            $table->datetimes("end_at");
            $table->integer("max_number_subscribe");
            $table->string("category");
            $table->float("prices");
            $table->text("project_description"); 
            $table->text("instruction"); 
            $table->text("dao_submission_confirmation_message"); 
            $table->string("country");
            $table->string("city");
            $table->integer("postal");
            $table->string("state/province"); 
            $table->foreignIdFor(Worker::class);
            $table->timestamps();
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daos');
    }
};

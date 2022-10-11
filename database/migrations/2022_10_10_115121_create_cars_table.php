<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_model_id')->constrained('car_models');
            $table->string('image')->nullable();
            $table->year('year_issue');
            $table->string('car_number');
            $table->string('color');
            $table->enum('kp', ['АВТОМАТ','МЕХАНИК'])->default('АВТОМАТ');
            $table->decimal('daily_coast')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};

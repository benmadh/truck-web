<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('number')->nullable();
            $table->json('images')->nullable();
            $table->json('specs')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('model')->nullable();
            $table->unsignedInteger('brand')->nullable();
            $table->enum('type', ['camion', 'furgoni', 'auto'])->nullable();
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
        Schema::dropIfExists('vehicles');
    }
}

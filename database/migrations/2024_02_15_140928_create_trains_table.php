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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();          
            $table->string('company', 50);
            $table->string('origin_station', 58);
            $table->string('destination_station', 58);
            $table->time('departure_hour');
            $table->time('arrival_hour');
            $table->string('train_code', 8);
            $table->tinyInteger('number_of_coaches')->unsigned();
            $table->tinyInteger('on_time')->unsigned();
            $table->tinyInteger('cancelled')->unsigned();            
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
        Schema::dropIfExists('trains');
    }
};

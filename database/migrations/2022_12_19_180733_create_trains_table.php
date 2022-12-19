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
            
            $table->string('company', 30);
            $table->string('departure_station', 30);
            $table->string('arrive_station', 30);
            $table->date('date_departure'); 
            $table->time('time_departure');
            $table->time('time_arrive');
            $table->string('code_train', 6);
            $table->tinyInteger('number_carriages')->unsigned();
            $table->tinyInteger('in_time')->default(1);
            $table->tinyInteger('delete')->default(NULL);  
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
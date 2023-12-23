<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plots', function (Blueprint $table) {
            $table->id();
            $table->string('plot_no',20); //S1_008 , S2_007 
            $table->string('type',14); //Residential , Comercial , Agricultural
            $table->string('dimensions',8); 
            $table->double('price');

            $table->timestamps();

            $table->unsignedbiginteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plots');
    }
}

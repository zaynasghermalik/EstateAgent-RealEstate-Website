<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('house_no',20); //H1_008 , H2_007 
            $table->string('type',14); //simple, furnished
            $table->double('marla');
            $table->double('floors'); // 1,2,3
            $table->double('bedrooms'); // 1,2,3
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
        Schema::dropIfExists('houses');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBivseFirmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bivse_firme', function(Blueprint $table){
            $table->increments('id');
            $table->string('ime_firme');
            $table->unsignedInteger('zaposleni_id');
            
            $table->foreign('zaposleni_id')->references('id')->on('zaposleni')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schemaa::dropIfExists('bivse_firme');
    }
}

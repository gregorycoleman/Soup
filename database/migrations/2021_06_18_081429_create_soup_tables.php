<?php

use Illuminate\Database\Migrations\Migration ;
use Illuminate\Database\Schema\Blueprint ;
use Illuminate\Support\Facades\Schema ;

class CreateSoupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('soup_objects', function (Blueprint $table) {
            $table->id() ;
            $table->string('uuid')->unique() ;
            $table->timestamps() ;
        }) ;
        */
        Schema::create('soup_data', function (Blueprint $table) {
            $table->id() ;
            $table->string('uuid')->unique() ;
            $table->timestamps() ;
        }) ; 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('soup_objects') ;
        Schema::dropIfExists('soup_data') ;
    }
}
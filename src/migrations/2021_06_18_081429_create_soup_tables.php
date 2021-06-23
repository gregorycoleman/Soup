<?php

use Illuminate\Database\Migrations\Migration ;
use Illuminate\Database\Schema\Blueprint ;
use Illuminate\Support\Facades\Schema ;
use Illuminate\Support\Str ;


class CreateSoupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
        Schema::create('soup_objects', function (Blueprint $table) {
            $table->id() ;
            $table->string('uuid')->unique() ;
            $table->timestamps() ;
        }) ;
        **/
        Schema::create('soup_data', function (Blueprint $table) {
            $table->id() ;
            $table->string('uuid')->unique() ;
            $table->bigIncrements('prev_record') ;
            $table->string('computed_hash' ) ;
            $table->integer('algo_version_number')->default(1) ;

            $table->string('parent_object_uuid')->nullable() ;
            
            $table->smallInteger('is_deleted')->default(0) ;

            $table->string('key')->nullable() ;
            $table->string('value')->nullable() ;
            $table->string('type')->nullable() ;

            $table->timestamps() ;
        }) ; 

        // I need to create a root record
        DB::table('soup_data')->insert([
            [
                'uuid' => Str::uuid(),
                'prev_record' => 1,
                'computed_hash' => Str::random(16)
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('soup_objects') ;
        Schema::dropIfExists('soup_data') ;
    }
}

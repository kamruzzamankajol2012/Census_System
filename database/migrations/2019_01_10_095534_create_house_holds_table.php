<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseHoldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_holds', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('house_own_type')->nullable();
            $table->string('house_wall')->nullable();
            $table->string('latrin_type')->nullable();
            $table->string('total_land')->nullable();
            $table->string('source_of_water')->nullable();
            $table->string('occupation')->nullable();
            $table->string('number_of_person_in_abroad')->nullable();
            $table->string('electricity')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_holds');
    }
}

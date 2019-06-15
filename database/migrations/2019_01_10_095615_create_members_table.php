<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nid')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('bid')->nullable();
            $table->string('name')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('occupation')->nullable();
            $table->string('education')->nullable();
            $table->string('relation_with_khana')->nullable();
            $table->string('present_address')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('sex')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('living_style')->nullable();
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
        Schema::dropIfExists('members');
    }
}

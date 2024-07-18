<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTRegistrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_registrants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('church_id');
            $table->varchar('church_name');
            $table->integer('worship_id');
            $table->integer('church_seat_id');
            $table->string('fullname');
            $table->string('gender');
            $table->longText('address');
            $table->string('region');
            $table->integer('age');
            $table->integer('phone_number');
            $table->string('answer_1');
            $table->string('answer_2');
            $table->string('answer_3');
            $table->string('answer_4');
            $table->string('answer_5');
            $table->string('answer_6');
            $table->string('answer_7');
            $table->string('answer_8');
            $table->string('status');
            $table->softDeletes();
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
        Schema::dropIfExists('t_registrants');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTChurchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_churchs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('seat');
            $table->integer('no_telephone');
            $table->varchar('email');
            $table->longText('address')->nullable();
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
        Schema::dropIfExists('t_churchs');
    }
}

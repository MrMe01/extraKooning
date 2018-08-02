<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('image',45);
            $table->string('description',500);
            $table->string('content',500);
            $table->float('adult');
            $table->float('child');
            $table->timestamps();
            $table->integer('activities_id')->unsigned();
            $table->integer('times_id')->unsigned();

            $table->foreign('activities_id')->references('id')->on('activities');
            $table->foreign('times_id')->references('id')->on('times');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_activities');
        Schema::dropIfExists('tickets');
    }
}

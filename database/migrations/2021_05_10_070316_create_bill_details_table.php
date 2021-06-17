<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details', function (Blueprint $table) {
            $table->increments('bill_details_id');
            $table->integer('bill_id')->unsigned();
            $table->foreign('bill_id')->references('bill_id')->on('bill')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('configuration_id')->unsigned();
            $table->foreign('configuration_id')->references('configuration_id')->on('configuration')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('bill_details_quantily');
            $table->integer('bill_details_price');
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
        Schema::dropIfExists('bill_details');
    }
}

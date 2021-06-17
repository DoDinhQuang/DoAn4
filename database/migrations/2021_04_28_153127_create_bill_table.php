<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {// hoa don nhap
            $table->increments('bill_id');
            $table->integer('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('supplier_id')->on('supplier')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('bill_total');
            $table->dateTime('bill_time');
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
        Schema::dropIfExists('bill');
    }
}

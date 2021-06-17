<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuration', function (Blueprint $table) {//cấu hình
            $table->increments('configuration_id');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')->on('product')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('configuration_ram');//ram
            $table->integer('configuration_interna_memory');//bộ nhớ trong
            $table->integer('configuration_price');//giá
            $table->integer('configuration_number');//số lượng
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
        Schema::dropIfExists('configuration');
    }
}

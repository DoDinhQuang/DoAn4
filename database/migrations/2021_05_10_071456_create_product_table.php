<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->integer('manufacturer_id')->unsigned();
            $table->foreign('manufacturer_id')->references('manufacturer_id')->on('manufacturer')->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_img','255');//ảnh
            $table->string('product_screen_size');//kích thước màn hình
            $table->string('product_resolution');//độ phân giải operating system
            $table->string('product_operating');//hệ điều hành processor chip
            $table->string('product_processor_chip');//chip xử lý
            $table->string('product_front_camera');//camera trước
            $table->string('product_rear_camera');//camera sau
            $table->string('product_battery_capacity');//dung lượng pin
            $table->string('product_sim');//thẻ sim
            $table->integer('product_hot');//sản phẩm hot
            $table->integer('product_new');//sản phẩm mới
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
        Schema::dropIfExists('product');
    }
}

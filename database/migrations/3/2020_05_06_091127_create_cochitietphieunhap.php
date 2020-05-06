<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCochitietphieunhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cochitietphieunhap', function (Blueprint $table) {
           
            
            $table->Integer('pn_ma')->unsigned();
            $table->foreign('pn_ma')->references('pn_ma')->on('phieunhap');
            $table->Integer('sp_ma')->unsigned();
            $table->foreign('sp_ma')->references('sp_ma')->on('sanpham');
            $table->unique('pn_ma');
            $table->unique('sp_ma');
            $table->Integer('SoLuongNhap');
            $table->String('DonGiaNhap');
           
            $table->timestamps(); //tự động thêm thời gian tạo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cochitietphieunhap');
    }
}

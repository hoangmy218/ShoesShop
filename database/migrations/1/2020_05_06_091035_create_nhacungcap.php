<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhacungcap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->Increments('ncc_ma'); //Increments là khóa chính
            $table->String('nd_ten',50);
            $table->String('nd_email',50);
            $table->String('nd_dienThoai',10);
            $table->Text('nd_diaChi');
            
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
        Schema::dropIfExists('nhacungcap');
    }
}

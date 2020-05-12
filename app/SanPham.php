<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    //
    // Tiên 14/03
    protected $table = 'sanpham';
	protected $primaryKey = 'sp_ma';
	protected $guarded = [];
}

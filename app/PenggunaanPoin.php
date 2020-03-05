<?php

namespace App;

use Vayu\SharedModel\PointUsage;

class PenggunaanPoin extends PointUsage
{
    public function pengguna() {
    	return $this->belongsTo(Pengguna::class, 'user_id');
    }
}

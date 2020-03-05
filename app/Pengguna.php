<?php

namespace App;

use Vayu\SharedModel\User;

class Pengguna extends User
{
	public function pointUsage() {
		return $this->hasMany(\Vayu\SharedModel\PointUsage::class, 'user_id');
	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
     protected $table = 'merks';
     protected $fillable = ['nama','logo'];
     public $timestamps = true;

	public function merk()
	{
		return $this->hasMany('App\merk','merk_id');
	}
}
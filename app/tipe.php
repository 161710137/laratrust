<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipe extends Model
{
    protected $table = 'tipes';
     protected $fillable = ['nama_type'];
     public $timestamps = true;

	public function tipe()
	{
		return $this->hasMany('App\tipe','type_id');
	}
}

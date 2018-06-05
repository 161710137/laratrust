<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
     protected $table = 'members';
     protected $fillable = ['nama_lengkap','no_telepon','no_wa','Email','mobil_id'];
     public $timestamps = true;

	public function member()
	{
		return $this->belongsTo('App\member','mobil_id');
	}
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table = 'mobils';
    protected $fillable = ['nama_mobil','gambar','harga','warna','transmisi','tahun_keluar','deskripsi','merk_id','type_id'];
    public $timestamps = true;

	public function mobil()
	{
		return $this->hasMany('App\mobil','merk_id');
	}
	public function mobil()
	{
		return $this->belongsTo('App\mobil','type_id');
	}
}

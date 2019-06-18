<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;


class Divisi extends Template1Model
{
	protected $table = 'divisi';
	public $fieldTable = ['a.id', 'a.nama'];


	// public function pegawai()
 //    {
 //        return $this->hasOne('App\Models\Pegawai', 'divisi', 'id');
 //    }
	public static function init(){
		return new self();
	}
	
}

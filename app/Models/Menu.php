<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;


class Menu extends Template1Model
{
	protected $table = 'divisi';
	public $fieldTable = ['a.id', 'a.nama'];

	public static function init(){
		return new self();
	}
	
}

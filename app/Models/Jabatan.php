<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use DB;


class Jabatan extends Template1Model
{
	protected $table = 'jabatan';
	public $fieldTable = ['a.id', 'a.nama'];

	public static function init(){
		return new self();
	}
}

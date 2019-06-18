<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

use DB;

class JabatanService extends Template1Service
{
	public $table = 'divisi';
	public $fieldTable = ['a.id', 'a.nama'];

	
}
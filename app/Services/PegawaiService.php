<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;

use DB;

class PegawaiService 
{
	public  $table = 'pegawai';
	public $fieldTable = ['a.id', 'a.nama', 'b.nama'];

	public static function init(){
		return new self();
	}

	public  function getData(Request $request){
		$dataTempAll = DB::table($this->table." as a")
		->select(["a.id", "a.nama", "b.nama as divisi"])
		->join('divisi as b', 'a.divisi', '=', 'b.id');
		if($request->search['value']){
			foreach($this->fieldTable as $field){
			    $dataTempAll->orWhere($field, 'LIKE', '%'.$request->search['value'].'%');
			}
		}
		if($request->order){
			$order = $request->order;
			$dataTempAll = $dataTempAll->orderBy($this->fieldTable[$order[0]['column']], $order[0]['dir']);
		}
		$dataTempAll = $dataTempAll->skip($request->start)->take($request->length)->get();
		
		return $dataTempAll;
	}
	
}

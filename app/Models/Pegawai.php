<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;

use DB;


class Pegawai extends Template1Model
{
    //
	protected $table = 'pegawai';

	public $fieldTable = ["a.id", "a.nama", "a.username", "a.email", "b.nama", "a.telepon", "a.alamat", "a.tanggal_lahir", "a.tanggal_masuk", "a.tanggal_keluar", "a.atasan", "d.nama"];

	public static function init(){
		return new self();
	}

	public function getData(Request $request){
		$dataTempAll = DB::table($this->table." as a")
		->select(["a.id", "a.nama", "a.username", "a.email", "b.nama as divisi", "a.telepon", "a.alamat", "a.tanggal_lahir", "a.tanggal_masuk", "a.tanggal_keluar", "c.nama as atasan", "d.nama as jabatan"])
		->leftJoin('divisi as b', 'a.divisi', '=', 'b.id')
		->leftJoin('pegawai as c', 'a.atasan', '=', 'c.id')
		->leftJoin('jabatan as d', 'a.jabatan', '=', 'd.id');
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

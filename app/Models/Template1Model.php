<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;

use DB;

class Template1Model extends Model
{
	protected $table = '';
	public $fieldTable = [];

	public static function init(){
		return new self();
	}

	public function getData(Request $request){
		$dataTempAll = DB::table($this->table." as a")
		->select($this->fieldTable);
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
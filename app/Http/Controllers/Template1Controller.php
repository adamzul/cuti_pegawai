<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Requests;
use App\Models\Pegawai;
use App\Models\Divisi;
use App\Models\Jabatan;

use Illuminate\Hashing\BcryptHasher;
use App\Services\PegawaiService as MainService;

class Template1Controller extends Controller
{
	// use App\Models\Pegawai as MainModel;

	public $mainModel = "";
	public $fieldTable = [];
	public $fieldInput = [];
	public $mainView = "";
	public $mainUrl = "";
	public $title = "";

    public function index(){
		$mainModel = $this->mainModel;

    	$divisiAll = Divisi::all();
    	$jabatanAll = Jabatan::all();
    	$pegawaiAll = Pegawai::all();
		$dataCount = $mainModel::all()->count();

    	$user = \Auth::user();
		return view($this->mainView, ["mainUrl" => $this->mainUrl, "title" => $this->title, "divisiAll" => $divisiAll, "jabatanAll" => $jabatanAll, "pegawaiAll" => $pegawaiAll]);
	}

	public function store(Request $request) {
		$mainModel = $this->mainModel;

	    $validator = Validator::make($request->all(), $this->fieldInput);

	    if ($validator->fails()) {
	    	$messages = $validator->messages();
	    	return json_encode(["status" => false, "inputerror" => $messages]) ;
	        
	    }
	    $newRecord = new $this->mainModel;
	    foreach ($this->fieldInput as $key => $value) {
	    	$newRecord->$key = $request->$key;

	    }
	    $newRecord->save();

	    return json_encode(["status" => true]);
	}

	public function getData(Request $request){
		// var_dump($this->fieldInput);
		// return 0;
		$mainModel = $this->mainModel;
		$dataTempAll = $mainModel::init()->getData($request);
		$dataCount = $mainModel::all()->count();
		$data = [];
		foreach ($dataTempAll as $dataTemp) {
			$row = [];
			foreach ($this->fieldTable as $key => $value) {
				$row[] = $dataTemp->$value;
			}
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_data('."'".$dataTemp->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_data('."'".$dataTemp->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}
		return json_encode(["status" => true, "data" => $data, "recordsFiltered" => $dataCount]);
	}
	public function edit($id){
		$mainModel = $this->mainModel;

		$record = $mainModel::where("id", $id)->first();
		return json_encode($record);
	}

	public function update(Request $request){
		$mainModel = $this->mainModel;

		$validator = Validator::make($request->all(), $this->fieldInput);

	    if ($validator->fails()) {
	    	$messages = $validator->messages();
	    	return json_encode(["status" => false, "inputerror" => $messages]) ;
	    }
		$record = $mainModel::find($request->id);
	    foreach ($this->fieldInput as $key => $value) {
	    	$record->$key = $request->$key;
	    }
	    
	    $record->save();
	    return json_encode(["status" => true]);
	}

	public function delete($id){
		$mainModel = $this->mainModel;

		$record = $mainModel::find($id);
	    $record->delete();
	    return json_encode(["status" => true]);
	}
}

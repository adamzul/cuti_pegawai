<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Models\Divisi as MainModel;
use App\Services\DivisiService as MainService;

class DivisiController extends Controller
{
	public $fieldTable = ['id', 'nama'];
	public $fieldInput = ['nama' => 'required|max:30'];
	public $mainView = 'divisi';
	public $mainUrl = 'divisi';
	public $title = 'Divisi';
    public function index(){
		return view($this->mainView, ["mainUrl" => $this->mainUrl, "title" => $this->title]);
	}

	public function store(Request $request) {
	    $validator = Validator::make($request->all(), $this->fieldInput);

	    if ($validator->fails()) {
	    	$messages = $validator->messages();
	    	return json_encode(['status' => false, 'inputerror' => $messages]) ;
	    }
	    $newRecord = new MainModel;
	    foreach ($this->fieldInput as $key => $value) {
	    	$newRecord->$key = $request->$key;

	    }
	    $newRecord->save();

	    return json_encode(['status' => true]);
	}

	public function getData(Request $request){
		
		$dataTempAll = MainModel::init()->getData($request);
		$dataCount = MainModel::all()->count();
		$data = [];
		foreach ($dataTempAll as $dataTemp) {
			# code...
			$row = [];
			foreach ($this->fieldTable as $key => $value) {
				# code...
				$row[] = $dataTemp->$value;
			}
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_data('."'".$dataTemp->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_data('."'".$dataTemp->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}
		return json_encode(['status' => true, 'data' => $data, "recordsFiltered" => $dataCount]);
	}
	public function edit($id){
		$record = MainModel::where('id', $id)->first();
		return json_encode($record);
	}

	public function update(Request $request){
		$validator = Validator::make($request->all(), $this->fieldInput);
		if ($validator->fails()) {
	    	$messages = $validator->messages();
	    	return json_encode(['status' => false, 'inputerror' => $messages]) ;
	    }
		$record = MainModel::find($request->id);
	    foreach ($this->fieldInput as $key => $value) {
	    	$record->$key = $request->$key;
	    }
	    $record->save();
	    return json_encode(['status' => true]);
	}

	public function delete($id){
		$record = MainModel::find($id);
	    $record->delete();
	    return json_encode(['status' => true]);
	}
}

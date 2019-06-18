<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Requests;
use App\Models\Pegawai as MainModel;
use App\Models\Divisi;
use App\Models\Jabatan;

use Illuminate\Hashing\BcryptHasher;
use App\Services\PegawaiService as MainService;

class Template1Controller extends Controller
{
	use App\Models\Pegawai as MainModel;


	public $fieldTable = ["id", "nama","username", "email", "divisi", "jabatan", "telepon", "alamat", "atasan", "tanggal_lahir", "tanggal_masuk", "tanggal_keluar"];
	public $fieldInput = ["nama" => "required|max:30", "username" => "required", "email" => "required", "password" => "required", "divisi" => "required", "jabatan" => "required", "telepon" => "required", "alamat" => "required", "tanggal_lahir" => "required", "tanggal_masuk" => "required", "atasan" => ""];
	public $mainView = "pegawai";
	public $mainUrl = "pegawai";
	public $title = "Pegawai";

    public function index(){
    	$divisiAll = Divisi::all();
    	$jabatanAll = Jabatan::all();
    	$pegawaiAll = MainModel::all();
    	$user = \Auth::user();
		return view($this->mainView, ["mainUrl" => $this->mainUrl, "title" => $this->title, "divisiAll" => $divisiAll, "jabatanAll" => $jabatanAll, "pegawaiAll" => $pegawaiAll]);
	}

	public function store(Request $request) {
	    $validator = Validator::make($request->all(), $this->fieldInput);

	    if ($validator->fails()) {
	    	$messages = $validator->messages();
	    	return json_encode(["status" => false, "inputerror" => $messages]) ;
	        // return redirect("/")
	        //     ->withInput()
	        //     ->withErrors($validator);
	    }
	    $newRecord = new MainModel;
	    foreach ($this->fieldInput as $key => $value) {
	    	$newRecord->$key = $request->$key;

	    }
	    $newRecord->forceFill([
                "password" => bcrypt($request->password),
               "remember_token" => Str::random(60),
            ])->save();

	    return json_encode(["status" => true]);
	}

	public function getData(Request $request){
		
		$dataTempAll = MainModel::init()->getData($request);
		$dataCount = MainModel::all()->count();
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
		$record = MainModel::where("id", $id)->first();
		$record->password = "";
		return json_encode($record);
	}

	public function update(Request $request){
		$validator = Validator::make($request->all(), $this->fieldInput);

	    if ($validator->fails()) {
	    	$messages = $validator->messages();
	    	return json_encode(["status" => false, "inputerror" => $messages]) ;
	    }
		$record = MainModel::find($request->id);
	    foreach ($this->fieldInput as $key => $value) {
	    	if($key != "password"){
		    	$record->$key = $request->$key;
		    }
	    }
	    if($request->password != ""){
	    	$hasher = new BcryptHasher();
    		$record->forceFill([
            	"password" => bcrypt($request->password),
            	"remember_token" => Str::random(60),
            ]);
    	}
	    $record->save();
	    return json_encode(["status" => true]);
	}

	public function delete($id){
		$record = MainModel::find($id);
	    $record->delete();
	    return json_encode(["status" => true]);
	}
}

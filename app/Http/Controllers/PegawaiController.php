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

class PegawaiController extends Template1Controller
{
	public $mainModel = 'App\Models\Pegawai';

	public $fieldTable = ["id", "nama","username", "email", "divisi", "jabatan", "telepon", "alamat", "atasan", "tanggal_lahir", "tanggal_masuk", "tanggal_keluar"];
	public $fieldInput = ["nama" => "required|max:30", "username" => "required", "email" => "required", "password" => "required", "divisi" => "required", "jabatan" => "required", "telepon" => "required", "alamat" => "required", "tanggal_lahir" => "required", "tanggal_masuk" => "required", "atasan" => ""];
	public $mainView = "pegawai";
	public $mainUrl = "pegawai";
	public $title = "Pegawai";

    public function index(){
		$mainModel = $this->mainModel;

    	$divisiAll = Divisi::all();
    	$jabatanAll = Jabatan::all();
    	$pegawaiAll = Pegawai::all();
    	$user = \Auth::user();
		return view($this->mainView, ["mainUrl" => $this->mainUrl, "title" => $this->title, "divisiAll" => $divisiAll, "jabatanAll" => $jabatanAll, "pegawaiAll" => $pegawaiAll]);
	}

	public function store(Request $request) {
		$mainModel = $this->mainModel;

	    $validator = Validator::make($request->all(), $this->fieldInput);

	    if ($validator->fails()) {
	    	$messages = $validator->messages();
	    	return json_encode(["status" => false, "inputerror" => $messages]) ;
	        // return redirect("/")
	        //     ->withInput()
	        //     ->withErrors($validator);
	    }
	    $newRecord = new $mainModel;
	    foreach ($this->fieldInput as $key => $value) {
	    	$newRecord->$key = $request->$key;

	    }
	    $newRecord->forceFill([
                "password" => bcrypt($request->password),
               "remember_token" => Str::random(60),
            ])->save();

	    return json_encode(["status" => true]);
	}

	
	public function edit($id){
		$mainModel = $this->mainModel;

		$record = $mainModel::where("id", $id)->first();
		$record->password = "";
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

	
}

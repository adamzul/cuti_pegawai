<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Models\Jabatan as MainModel;

class JabatanController extends Controller
{
	public $mainModel = "App\Models\Jabatan";
	public $fieldTable = ['id', 'nama'];
	public $fieldInput = ['nama' => 'required|max:30'];
	public $mainView = 'jabatan';
	public $mainUrl = 'jabatan';
	public $title = 'Jabatan';
    
}

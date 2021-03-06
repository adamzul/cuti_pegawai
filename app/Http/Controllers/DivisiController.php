<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Models\Divisi as MainModel;
use App\Services\DivisiService as MainService;

class DivisiController extends Template1Controller
{
	public $mainModel = "App\Models\Divisi";
	public $fieldTable = ['id', 'nama'];
	public $fieldInput = ['nama' => 'required|max:30'];
	public $mainView = 'divisi';
	public $mainUrl = 'divisi';
	public $title = 'Divisi';
    
}

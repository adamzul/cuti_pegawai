<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Models\Menu as MainModel;
use App\Services\DivisiService as MainService;

class MenuController extends Template1Controller
{
	public $mainModel = "App\Models\Menu";
	public $fieldTable = ['id', 'nama'];
	public $fieldInput = ['nama' => 'required|max:30'];
	public $mainView = 'menu';
	public $mainUrl = 'menu';
	public $title = 'Menu';
    
}

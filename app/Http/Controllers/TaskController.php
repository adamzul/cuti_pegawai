<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Task;

class TaskController extends Controller
{
	public $fieldTable = ['id', 'name'];
	public $fieldInput = ['name'];
    public function index(){
		return view('tasks');
	}

	public function store(Request $request) {
	    $validator = Validator::make($request->all(), [
	        'name' => 'required|max:255',
	    ]);

	    if ($validator->fails()) {
	        return redirect('/')
	            ->withInput()
	            ->withErrors($validator);
	    }
	    $task = new Task;
	    $task->name = $request->name;
	    $task->save();

	    return json_encode(['status' => true]);
	}

	public function getData(){
		$dataTempAll = Task::all();
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
		return json_encode(['status' => true, 'data' => $data]);
	}
	public function edit($id){
		// $id = $request->input('id');
		// var_dump($id);
		$task = Task::where('id', $id)->first();
		return json_encode($task);
	}

	public function update(Request $request){
		$task = Task::find($request->id);
	    $task->name = $request->name;
	    $task->save();
	    return json_encode(['status' => true]);
	}

	public function delete($id){
		$task = Task::find($id);
	    $task->delete();
	    return json_encode(['status' => true]);
	}
}

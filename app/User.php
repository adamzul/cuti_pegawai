<?php

namespace App;
use Illuminate\Http\Request;
use DB;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'pegawai';
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fieldTable = ["id", "name", "email"];

    public static function init(){
        return new self();
    }

    public function getData(Request $request){
        $dataTempAll = DB::table("users as a")
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

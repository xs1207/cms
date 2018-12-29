<?php

namespace App\Http\Controllers\Vip;

use App\Model\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class User extends Controller
{
    public function index($id){
        echo "ID:".$id;

        echo __METHOD__;
        $user=UserModel::where(["id"=>$id])->first()->toArray();
        echo "<pre>";print_r($user);
    }
}

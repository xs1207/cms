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
        echo "<pre/>";
        print_r($user);
    }
    //增
    public function add(){
        $data=[
            'uname'=>str_random(5),
            'pwd'=>123123
        ];
        $id=UserModel::insert($data);
        var_dump($id);
    }
    //删
    public function del($id){
        $where=[
            'id'=>$id
        ];
        $rs=UserModel::where($where)->delete();
        var_dump($rs);
    }
    //改
    public function update($id){
        $data=[
            'pwd'=>456456
        ];
        $where=[
            'id'=>$id
        ];
        $re=UserModel::where($where)->update($data);
        var_dump($re);
    }
    //查
    public function select(){
        $res=UserModel::get()->toArray();
        var_dump($res);
    }

    //    blade模板
    public function list(){
        $list=UserModel::all();
        $data=[
            'list'=>$list,
        ];
        return view('user.user',$data);
    }

}


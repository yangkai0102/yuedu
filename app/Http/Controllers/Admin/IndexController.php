<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Login\AuthorModel;
use App\Login\UserModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //后台首页
    public function index(){
        return view('admin.index');
    }



    //后台审核作者
    public function examauthor(){
        $data=AuthorModel::get();
        return view('admin.exam',['data'=>$data]);
    }

    //审核作者通过
    public function doexam(){
            $id=request()->input('id');
            $res1=AuthorModel::where('username',$id)->update(['status'=>1]);
            $res2=UserModel::where('tel',$id)->update(['status'=>1]);

            if($res1&&$res2){
                return 1;
            }else{
                return 2;
            }
    }
}

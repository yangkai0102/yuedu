<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Login\AuthorModel;
use App\Login\NovelsModel;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //作家首页
    public function index(){
        $user=session('user');
        $info=AuthorModel::where('username',$user)->first()->toArray();
        $nickname=$info['nickname'];
        session(['authorid'=>$info['aid']]);
        return view('author.index',['nickname'=>$nickname]);
    }

    //申请成为作家
    public function apply(){
        $user=session('user');
        $userinfo=AuthorModel::where('username',$user)->first();
        if($userinfo){
            $info=$userinfo->toArray();
            if($info['status']==0){
                echo "正在审核，请稍后...";
            }else{
                return view('author.index');
            }
        }else{
            return view('author.apply');
        }
    }

    public function doapply(){
        $data=request()->all();
        $data['status']=0;
        $res=AuthorModel::insert($data);
        if($res){
            return "等待审核，请稍后...";
        }
    }

    public function lists(){
        $userid = session('authorid');
        $info=NovelsModel::where('authorid',$userid)->get();
        return view('author.novel',['novel'=>$info]);
    }

    public function newbook(){
        return view('author.new');
    }

    //创建新书
    public function createbook(){
        $data=request()->all();
        $data['authorid']=session('authorid');

        $res=NovelsModel::insert($data);
        if($res){
            return "发布成功";
        }else{
            return "发布失败";
        }
    }
}

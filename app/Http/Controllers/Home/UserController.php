<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Login\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function scan(){
        return view('user.scan');
    }

    //发送验证码
    public function span_tel(){
        $user_tel=request()->input('user_tel');
        //短信验证
        $reg ='/^1\d{10}$/';
        if(empty($user_tel)){
            echo json_encode(['font'=>'电话不能为空','code'=>2]);exit;
        }else if(!preg_match($reg,$user_tel)){
            echo json_encode(['font'=>'电话必须以1开头，不能超过11位','code'=>2]);exit;
        }else{
            $count = UserModel::where('tel',$user_tel)->count();
            if($count>0){
                echo json_encode(['font'=>'电话已存在','code'=>2]);exit;
            }
        }
        $code = rand(100000,999999);
        $body = "您的验证码为：".$code."，五分钟内有效。请勿泄露！!";
        $res  = sendSms($user_tel,$code);
        if($res){
            $telInfo = ['user_tel'=>$user_tel,'code'=>$code];
            session(['telInfo'=>$telInfo]);
            echo json_encode(['font'=>'发送成功','code'=>1]);
        }else{
            echo json_encode(['font'=>'发送失败','code'=>2]);exit;
        }
    }

    //执行登录
    public function logindo(){
        $tel=request()->input('tel');
        $pwd=request()->input('password');
        $where=
            ['tel'=>$tel];
        $res=UserModel::where($where)->first()->toArray();
//        dd($res);
        if($res){

            if($pwd==$res['password']){
                session(['user'=>$tel]);
                return redirect("/");
            }else{
                dd("密码错误");
            }
        }else{
            dd('手机号不存在');
        }
    }

    //执行注册
    public function doregister(){
        $tel=request()->input('tel');
        $code=request()->input('code');
        $password=request()->input('password');

        $telInfo = session('telInfo');
        //验证手机号
        $reg ='/^1\d{10}$/';
        if(empty($tel)){
            dd('电话不能为空');
        }else if(!preg_match($reg,$tel)){
            dd('电话必须以1开头，不能超过11位');
        }else{
            $count = UserModel::where('tel',$tel)->count();
            if($count>0){
                dd('电话已存在');
            }
        }
        //验证验证码
        if(empty($code)){
            dd('验证码不能为空');
        }
        else if($code!=$telInfo['code']){
            dd('验证码错误');
        }
        if(empty($password)){
            dd('密码不能为空');
        }
        $data=['tel'=>$tel,'password'=>$password];
        $res=UserModel::insert($data);
        if($res){
            return redirect('/login');
        }

    }

}

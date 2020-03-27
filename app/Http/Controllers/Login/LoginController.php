<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Login\LoginModel;
use App\Login\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use QRcode;

class LoginController extends Controller
{
    //
    public function checkcode(){
        print_r(session('telInfo'));
    }

    public function wx(){
        echo $_GET['echostr'];
    }

    public function login(){
        return view('login/login');
    }

    public function logindo(){
        $tel=request()->input('tel');
        $pwd=request()->input('password');
        $where=
            ['tel'=>$tel];
        $res=UserModel::where($where)->first()->toArray();
//        dd($res);
        if($res){

            if($pwd==$res['password']){
                return redirect("/");
            }else{
                dd("密码错误");
            }
        }else{
            dd('手机号不存在');
        }
    }

    public function login2(){
        $code=$_GET['code'];
        $id="wx112dc5198a6a8695";
        $secret="fcff537db7189284312499e925b4134e";
        $tokenurl="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$id."&secret=".$secret."&code=".$code."&grant_type=authorization_code";
        $res=file_get_contents($tokenurl);
        $token=json_decode($res,true)['access_token'];
        $openid=json_decode($res,true)['openid'];
        $userurl="https://api.weixin.qq.com/sns/userinfo?access_token=".$token."&openid=".$openid."&lang=zh_CN";
        $userinfo=file_get_contents($userurl);
        $user=json_decode($userinfo,true);
        print_r($user);
        $openid=$user['openid'];
        $uid=session('uid');
        $data=[
            'openid'=>$openid,
            'uid'=>$uid
        ];
        UserModel::insert($data);

        

    }

    public function oauth(){
        $uid=$_GET['uid'];
        session(['uid'=>$uid]);
        $id="wx112dc5198a6a8695";
        $uri=urlencode("http://yuedu.1548580932.top/login2");
        $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$id."&redirect_uri=".$uri."&response_type=code&scope=snsapi_userinfo&state=yk01#wechat_redirect";
        header("location:$url");
    }

    public function code(){
        $uid=uniqid();
        $url='http://yuedu.1548580932.top/oauth?uid='.$uid;
        $res=UserModel::where('uid',$uid)->get();

        $obj= new QRcode();
//        $path='/images/';
//        $fileName = $path.'.png';
        $obj->png($url,public_path('/qrcode.png'));

        return redirect('login/qrcode');
    }

    public function qrcode(){
        return view('/login/qrcode');
    }
    public function index(){
        return view('index/index');
    }

    public function reg(){
        return view('/login/reg');
    }

    public function span_tel(){
        $user_tel=request()->input('user_tel');
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

    public function regdo(){
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

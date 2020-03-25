<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Login\LoginModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use phpqrcode;
class LoginController extends Controller
{
    //
    public function login(){
        return view('login/login');
    }

    public function logindo(){
        $tel=request()->input('tel');
        $pwd=request()->input('password');
        $where=
            ['tel'=>$tel];
        $res=LoginModel::where($where)->first();
//        dd($res);
        if($res){
            
            if($pwd==$res['pwd']){
                return redirect("/index");
            }else{
                dd("密码错误");
            }
        }else{
            dd('用户名不存在');
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
        $userurl=" https://api.weixin.qq.com/sns/userinfo?access_token=".$token."&openid=".$openid."&lang=zh_CN";
        $userinfo=file_get_contents($userurl);
        $user=json_decode($userinfo,true);
        print_r($user);

    }

    public function oauth(){
        $uid=$_GET['uid'];

        $id="wx112dc5198a6a8695";
        $uri=urlencode("http://yuedu.1548580932.top/login2");
        $url="https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$id."&redirect_uri=".$uri."&response_type=code&scope=snsapi_userinfo&state=yk01#wechat_redirect";
        header("location:$url");
    }

    public function code(){
        $uid=uniqid();
        $url='http://yuedu.1548580932.top/oauth?uid='.$uid;

        $obj= new \QRcode();
        $obj->png($url,public_path('/qrcode.png'));
        $QR = public_path('/qrcode.png'); //已经生成的原始二维码图
        echo '<img src="'.$QR.'">';die;
        return redirect('login/qrcode');
    }

    public function index(){
        return view('index/index');
    }
}

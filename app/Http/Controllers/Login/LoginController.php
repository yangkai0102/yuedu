<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use QRcode;
class LoginController extends Controller
{
    //
    public function login(){
        return view('login/login');
    }

    public function logindo(){

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

        $obj= new QRcode();
        $b=$obj->png($url,'/1.png');

        return redirect('login/qrcode',['img'=>$b]);
    }

    public function index(){
        return view('index/index');
    }
}

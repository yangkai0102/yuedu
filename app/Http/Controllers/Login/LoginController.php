<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Login\BookModel;
use App\Login\CateModel;
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

    //登录
    public function login(){
        return view('login/login');
    }


    //
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
    //首页
    public function index(){
        $data3=BookModel::orderBy('book_incr','desc')->take(3)->get();

        $data=BookModel::orderBy('book_incr','desc')->take(5)->get();

        $data2=BookModel::orderBy('book_incr','desc')->take(10)->get();


        $res=CateModel::get();
        return view('index/index',['data'=>$res,'res'=>$data,'paihang'=>$data2,'fenlei'=>$data3]);
    }

    //搜索
    public function sousuo(){

        $cate_id=request()->input('cate_id');
        $bname=request()->input('bname');
        $where=[];
        if($bname){
            $where[] =['bname','like',"%$bname%"];
        }
        if($cate_id){
            $where[] = ['cate_id','like',"%$cate_id%"];
        }
        $res=BookModel::where($where)->first();
        if(!$res){
            return redirect('/index/found');
        }else{
            BookModel::where('bname',$bname)->increment('book_incr',1);
            return view('/index/detail',['data'=>$res]);
            }
    }

    //页面找不到
    public function found(){
        return view('/index/found');
    }

    //注册
    public function reg(){
        return view('/login/reg');
    }




}

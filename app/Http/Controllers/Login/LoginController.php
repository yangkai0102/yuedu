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
        $res=LoginModel::where($where)->first()->toArray();
//        dd($res);
        if($res){

            if($pwd==$res['password']){
                return redirect("/index");
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
            $telInfo = ['user_tel'=>$user_tel,'code'=>$code,'send_time'=>time()];
            session('telInfo',$telInfo);
            echo json_encode(['font'=>'发送成功','code'=>1]);
        }else{
            echo json_encode(['font'=>'发送失败','code'=>2]);exit;
        }
    }


//短信
    function sendSms($tel, $code)
    {
        $params = array();

        // *** 需用户填写部分 ***
        // fixme 必填：是否启用https
        $security = false;

        // fixme 必填: 请参阅 https://ak-console.aliyun.com/ 取得您的AK信息
        $accessKeyId = "LTAI5Ap0NeV5hsfZ";
        $accessKeySecret = "4B8MD10oWhwrHK08rotMRZX9z1FR6c";

        // fixme 必填: 短信接收号码
        $params["PhoneNumbers"] = $tel;

        // fixme 必填: 短信签名，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
        $params["SignName"] = "星幻";

        // fixme 必填: 短信模板Code，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
        $params["TemplateCode"] = "SMS_172880108";

        // fixme 可选: 设置模板参数, 假如模板中存在变量需要替换则为必填项
        $params['TemplateParam'] = Array(
            "code" => $code,
        );

        // fixme 可选: 设置发送短信流水号
        $params['OutId'] = "12345";

        // fixme 可选: 上行短信扩展码, 扩展码字段控制在7位或以下，无特殊需求用户请忽略此字段
        $params['SmsUpExtendCode'] = "1234567";


        // *** 需用户填写部分结束, 以下代码若无必要无需更改 ***
        if (!empty($params["TemplateParam"]) && is_array($params["TemplateParam"])) {
            $params["TemplateParam"] = json_encode($params["TemplateParam"], JSON_UNESCAPED_UNICODE);
        }

        // 初始化SignatureHelper实例用于设置参数，签名以及发送请求
        //$helper = new SignatureHelper();
        $helper = new \sms\SignatureHelper();

        // 此处可能会抛出异常，注意catch
        $content = $helper->request(
            $accessKeyId,
            $accessKeySecret,
            "dysmsapi.aliyuncs.com",
            array_merge($params, array(
                "RegionId" => "cn-hangzhou",
                "Action" => "SendSms",
                "Version" => "2017-05-25",
            )),
            $security
        );
        //print_r($content);exit;
        return $content->Code;
        //print_r($content);die;
    }
}

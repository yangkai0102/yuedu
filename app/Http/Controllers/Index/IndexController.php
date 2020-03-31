<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Login\BookModel;
use App\Login\UserModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function lists($id){
        echo
        $data=UserModel::where('id',$id)->first();
        return view('/lists',['data'=>$data]);
    }

    public function yuepiao(){
        $yuepiao=request()->input('yuepiao');

        $info=session('telInfo');
        if(empty($info)){
            echo "请先去登录";
            redirect('/login');
        }else{
            $where=[
                ['yuepiao'=>$yuepiao],
                ['tel'=>$info['tel']]
            ];
            $res=UserModel::where($where)->first();
            if($res['yuepiao']==0){
                echo "请去充值";
                redirect('/index/pay');
            }elseif($res['yuepiao']>0){
                $res1=UserModel::where($where)->update(['yuepiao'=>$res['yuepiao']-1]);
                $res2=BookModel::where()->update();
            }
        }
    }

    //充值页面
    public function pay(){
        return view('/index/pay');
    }

    //作家页面
    public function author(){
        return view('/index/author');
    }

    //作家注册
    public function author_do(){
        $info=session('telInfo');
        if(empty($info)){
            echo "请先去登录";
            return redirect('/login');
        }else{
            return redirect('/author_reg');
        }
    }

    public function author_reg(){
        return view('/index/author_reg');
    }

}

<!DOCTYPE html>
<html class="x-admin-sm">

<head>
    <meta charset="UTF-8">
    <title>添加作品</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
{{--    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />--}}
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/xadmin.css')}}">
    <!-- <link rel="stylesheet" href="./css/theme5.css"> -->
    <script src="{{asset('lib/layui/layui.js')}}" charset="utf-8"></script>
    <script type="text/javascript" src="{{asset('js/xadmin.js')}}"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row">
        <form class="layui-form">
            <div class="layui-form-item">
                <label for="username" class="layui-form-label">
                    <span class="x-red">*</span>新书名字
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="username" name="bookname" required="" lay-verify="required"
                            class="layui-input">
                </div>

            </div>
            <div class="layui-form-item">
                <label for="phone" class="layui-form-label">
                    <span class="x-red">*</span>分类
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="cover" name="cover" required=""
                            class="layui-input">
                </div>

            </div>
            <div class="layui-form-item">
                <label for="L_email" class="layui-form-label">
                    <span class="x-red">*</span>标签
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_email" name="label" required=""
                           class="layui-input">
                </div>

            </div>

            <div class="layui-form-item">
                <label for="L_pass" class="layui-form-label">
                    <span class="x-red">*</span>封面
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="L_pass" name="pass" required="" 
                            class="layui-input">
                </div>

            </div>



            <!-- 加载编辑器的容器 -->
            <script id="container" name="content" type="text/plain">
        请编写简介
    </script>
            <!-- 配置文件 -->
            <script type="text/javascript" src="{{asset('Tools/utf8-php/ueditor.config.js')}}"></script>
            <!-- 编辑器源码文件 -->
            <script type="text/javascript" src="{{asset('Tools/utf8-php/ueditor.all.js')}}"></script>
            <!-- 实例化编辑器 -->

            <div class="layui-form-item">
                <label for="L_repass" class="layui-form-label">
                </label>
                <button  class="layui-btn" lay-filter="add" lay-submit="">
                    发布新书
                </button>
            </div>
        </form>
    </div>
</div>
<script>layui.use(['form', 'layer'],
        function() {
            $ = layui.jquery;
            var form = layui.form,
                layer = layui.layer;

            //自定义验证规则
            form.verify({
                nikename: function(value) {
                    if (value.length < 5) {
                        return '昵称至少得5个字符啊';
                    }
                },
                pass: [/(.+){6,12}$/, '密码必须6到12位'],
                repass: function(value) {
                    if ($('#L_pass').val() != $('#L_repass').val()) {
                        return '两次密码不一致';
                    }
                }
            });


            var ue = UE.getEditor('container');

            //监听提交
            form.on('submit(add)',
                function(data) {
                    $.ajax({
                        url:'/author/createbook',
                        data:data.field,
                        type:'post',
                        headers:{
                            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                        },
                        success:function(res){
                            layer.alert(res, {
                                icon: 6
                            }),
                                location.href='/';
                        }
                    })


                    return false;
                });

        });</script>
<script>var _hmt = _hmt || []; (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();</script>
</body>

</html>

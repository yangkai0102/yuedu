<!doctype html>
<html  class="x-admin-sm">
<head>
    <meta charset="UTF-8">
    <title>QQ阅读登录</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="./lib/layui/layui.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">

<div class="login layui-anim layui-anim-up">
    <div class="message">QQ阅读手机号注册</div>
    <div id="darkbannerwrap"></div>

    <form method="post" class="layui-form" action="{{url('/reg')}}">

        <input name="tel" placeholder="手机号"  type="text" id="tel" lay-verify="required" class="layui-input" >
        <hr class="hr15">
        <input type="text" name="code" lay-verify="required" id="tel_code" placeholder="请输入验证码">
        <a class="btn" href="javascript:void(0);" id="sendTelCode">
            <span class="dyButton" id="span_tel">获取</span>
        </a>
        <input name="password" placeholder="密码"  type="text" id="tel" lay-verify="required" class="layui-input" >
        <hr class="hr15">
        <input value="注册" lay-submit lay-filter="login" style="width:100%;" type="submit">

        <hr class="hr20" >
    </form>
</div>


</body>
</html>
<script>
    $(document).on('click','#span_tel',function() {
        // alert(111);
        // return false;
        //获取电话框
        var user_tel = $('#tel').val();
        reg = /^1\d{10}$/;
        if (user_tel == '') {
            alert('电话不能为空');
            return false;
        } else if (!reg.test(user_tel)) {
            alert('电话必须以1开头，不能超过11位');
            return false;
        }
        $.post(
            "{{url('/reg/span_tel')}}",
            {user_tel: user_tel},
            function (res) {
                alert(res.font);
                //console.log(res);
            },
            'json'
        );
    })
</script>
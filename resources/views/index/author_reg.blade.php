<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
    <div class="g-row mt24 author-apply">
        <div class="g-col g-col-8">
            <div class="g-title-h2 mb24">
                <h2 class="g-h2">申请成为作家</h2>
            </div>
            <form id="applyForm" class="apply-form" action="{{url('/author_reg2')}}" method="post">
                <!--             <div class="apply-form-item"><lable class="afi-title"><strong class="form-item-txt">基础信息</strong></lable></div> -->
                <div class="apply-form-item">
                    <label class="afi-title" for="authorName">笔名</label>
                    <input id="authorName" name="authorname" type="text" placeholder="请输入" class="ui-input">
                    <em class="icon-font input-vertified">&#xe90b;</em>
                    <p class="input-caution">2-6个汉字、数字或英文字母组成，笔名申请后不可变更</p>
                    <p class="input-error"></p>
                </div>
                <div class="apply-form-item">
                    <label class="afi-title" for="vipPwd">VIP管理密码</label>
                    <input type="password" id="vipPwd" name="password" placeholder="请输入" class="ui-input">
                    <em class="icon-font j-eye eye-off"></em>
                    <em class="icon-font input-vertified">&#xe90b;</em>
                    <p class="input-caution">6-16位英文、数字或特殊字符组成，查看数据时需要输入</p>
                    <p class="input-error"></p>
                </div>

                <div class="apply-form-item">
                    <label class="afi-title" for="authorEmail">身份证号</label>
                    <input name="shenfen" id="authorEmail" placeholder="name@sample.com" class="ui-input">
                    <em class="icon-font input-vertified">&#xe90b;</em>
                    <p class="input-caution">14位数字</p>
                    <p class="input-error"></p>
                </div>

                <div class="apply-form-item">

                    <div class="apply-form-submit">
                        <input type="submit" id="formSubmit" class="clip" value="提交申请">

                    </div>
                </div>
            </form>
        </div>
    </div>

</center>
</body>
</html>
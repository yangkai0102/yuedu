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
                    <label class="afi-title" for="authorName">昵称</label>
                    <input id="authorName" name="nickname" type="text" placeholder="请输入" class="ui-input">
                    <em class="icon-font input-vertified">&#xe90b;</em>

                </div>
                <div class="apply-form-item">
                    <label class="afi-title" for="vipPwd">邮箱</label>
                    <input type="email" id="vipPwd" name="email" placeholder="请输入" class="ui-input">
                    <em class="icon-font j-eye eye-off"></em>
                    <em class="icon-font input-vertified">&#xe90b;</em>

                </div>

                <div class="apply-form-item">
                    <label class="afi-title" for="authorEmail">身份证号</label>
                    <input name="shenfen" id="authorEmail" placeholder="" class="ui-input">
                    <em class="icon-font input-vertified">&#xe90b;</em>

                </div>

                <div class="apply-form-item">

                    <div class="apply-form-submit">
                        <input type="submit" id="formSubmit" class="clip" value="申请">

                    </div>
                </div>
            </form>
        </div>
    </div>

</center>
</body>
</html>
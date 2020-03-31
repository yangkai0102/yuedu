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
<form action="{{url('/index/order')}}" method="post">
    <table>
        <tr>
            <td>充值金额</td>
            <td><input type="text" name="mount"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="充值"></td>
        </tr>

    </table>
</form>

</body>
</html>
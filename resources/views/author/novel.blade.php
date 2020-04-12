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
    @if(empty($novel))
        您还没有作品
        @else
        您的作品
        @foreach($novel as $v)
            <div style="float: left">
                <img src="{{$v['cover']}}" alt="" width="200px" height="300px">
                <p>{{$v['bookname']}}</p>
            </div>
        @endif
</body>
</html>
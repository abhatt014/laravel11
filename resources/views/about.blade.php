<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-message-banner msg="login success" class="success"/>
     <x-message-banner msg="signup success" class="failure"/>
    @include('common.header',['data'=>'this is a header'])
    <div>
        @foreach($a as $uname)
    <h4>{{$uname}}</h4>
        @endforeach
        
    </div>
    About Page
    @for($i=0;$i<10;$i++)
    <h3>{{$i}}</h3>
    @endfor
</body>
</html>
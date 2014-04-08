<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Laravel PHP Framework</title>
        <style>
            @import url(//fonts.googleapis.com/css?family=Lato:700);

            body {
                margin:0;
                font-family:'Lato', sans-serif;
                text-align:center;
                color: #999;
            }

            .welcome {
                width: 300px;
                height: 200px;
                position: absolute;
                left: 50%;
                top: 50%;
                margin-left: -150px;
                margin-top: -100px;
            }

            a, a:visited {
                text-decoration:none;
            }

            h1 {
                font-size: 32px;
                margin: 16px 0 0 0;
            }
        </style>
    </head>
    <body>
        <div class="welcome">
            {{ Form::open(array('url' => '/home/add','method'=>'POST')) }}

            {{ Form::label('user', 'Username') . Form::text('Home[user]') }}
            <br>
            {{ Form::label('email', 'E-Mail Address') . Form::text('Home[email]') }}
            <br>
            {{ Form::submit('submit'); }}
            {{ Form::close() }}

            @if(isset($data))
            @foreach ($data as $user)
            {{ $user }} 
            @endforeach
            @endif
        </div>
    </body>
</html>

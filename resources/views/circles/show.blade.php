<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>New Event</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1 class='name'>
            {{$circle->name}}
        </h1>
        <div class='user_id'>{{$circle->user_id}}</div>
        <div class='contents'>
            <div class='contents'>
                <h3>活動内容</h3>
                <p class='contents'>{{$circle->contents}}</p>
            </div>
            <div class='qrcord_image'>
                <h3>QRコード</h3>
                <img src="{{Storage::url($circle->qrcord_image)}}" width="25%">
            </div>
            <div class='edit'>
                <a href="/circles/{{$circle->id}}/edit">edit</a>
            </div>
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
        </div>
    </body>
</html>

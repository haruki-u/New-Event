<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>New Event</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>サークルリスト</h1>
        <form action="/circles/{{$circle->id}}" method="CIRCLE">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="circle[title]" placeholder="タイトル" value="{{$circle->title}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('circle.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="circle[body]" placeholder="今日も1日お疲れさまでした。">{{$circle->body}}</textarea>
               <p class="body__error" style="color:red">{{ $errors->first('circle.body') }}</p>
            </div>
            <input type="submit" value="update">
        </form>
            <div class='footer'>
                <a href="/circles/{{$circle->id}}">戻る</a>
            </div>
        </div>
    </body>
</html>

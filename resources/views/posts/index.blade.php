<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta charset="utf-8">
        <title>New Event</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>サークルリスト</h1>
        <a href="/posts/create">create</a>
        <div class='posts'>
            @foreach($posts as $post)
            <div class='post'>
                <a href="/posts/{{$post->id}}"><h2 class='title'>{{$post->title}}</h2></a>
                <p class='body'>{{$post->body}}</p>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            <p>{{$posts->links()}}</p>
        </div>
    </body>
</html>

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
        <a href="/circles/create">create</a>
        <div class='circles'>
            @foreach($circles as $circle)
            <div class='circle'>
                <a href="/circles/{{$circle->id}}"><h2 class='title'>{{$circle->title}}</h2></a>
                <p class='body'>{{$circle->body}}</p>
                <form action="/circles/{{$circle->id}}" id="form_{{$circle->id}}" method="circle">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteCircle({{$circle->id}})">delete</button>
                </form>
            </div>
            @endforeach
        </div>
        <div class='paginate'>
            <p>{{$circles->links()}}</p>
        </div>
        <script>
            function deleteCircle(id){
                'use strict'
                
                if(confirm('削除すると復元できません。\本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>

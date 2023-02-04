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
        <h1>学生情報</h1>
        <div class='students'>
            @foreach($students as $student)
            <div class='student'>
                <a href="/students/{{$student->id}}"><h2 class='name'>{{$student->user_id}}</h2></a>
                <p class='user_id'>user_id:{{$student->name}}</p>
                <p class='grade'>学年：{{$student->grade}}</p>
                <p class='sex'>性別：{{$student->sex}}</p>
                <p class='faculty'>学部：{{$student->faculty}}</p>
                <p class='department'>学科：{{$student->department}}</p>
                <form action="/students/{{$student->id}}" id="form_{{$student->id}}" method="student">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deleteCircle({{$student->id}})">delete</button>
                </form>
            </div>
            @endforeach
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

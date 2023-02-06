<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>New Event</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <h1>登録フォーム</h1>
        <form action="/students" method="POST">
            @csrf
            <div class="user_id">
                <h2>User_id</h2>
                <input type="text" name="student[user_id]" value="{{ old('student.user_id') }}"/>
            </div>
            <div class="name">
                <h2>名前</h2>
                <input type="text" name="student[name]" value="{{ old('student.name') }}"/>
            </div>
            <div class="grade">
                <h2>学年</h2>
                <input type="text" name="student[grade]" value="{{ old('student.grade') }}"/>
            </div>
            <div class="sex">
                <h2>性別</h2>
                <input type="text" name="student[sex]" value="{{ old('student.sex') }}"/>
            </div>
            <div class="faculty">
                <h2>学部</h2>
                <input type="text" name="student[faculty]" value="{{ old('student.faculty') }}"/>
            </div>
            <div class="department">
                <h2>学部</h2>
                <input type="text" name="student[department]" value="{{ old('student.department') }}"/>
            </div>
    
            <input type="submit" value="store">
        </form>
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
        </div>
    </body>
</html>
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
        <form action="/circles" method="POST">
            @csrf
            <div class="user_id">
                <h2>User_id</h2>
                <input type="text" name="circle[user_id]" value="{{ old('circle.user_id') }}"/>
            </div>
            <div class="name">
                <h2>サークル名</h2>
                <textarea name="circle[name]" >{{ old('circle.name') }}</textarea>
            </div>
            <div class="qrcord_image">
                <h2>QRコード</h2>
                <form action="/circles/create" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="qrcord_image">
                    <input type="submit" value="アップロード">
                </form>
            </div>
            <div class="contents">
                <h2>内容</h2>
                <textarea name="circle[contents]" >{{ old('circle.contents') }}</textarea>
            </div>
            <input type="submit" value="store">
        </form>
            <div class='footer'>
                <a href="/">戻る</a>
            </div>
        </div>
    </body>
</html>

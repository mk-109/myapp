<!-- resources/views/form.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>入力フォーム</title>
    </head>
    <body>
        <h1>データを登録する</h1>

        <!-- @if (session('success'))
        <div style="color: green; margin-bottom: 1em;">
        {{ session('success') }}
        </div>
        @endif -->

        <!-- フォームの送信先は同じ /form、methodはPOST -->
        <form action="/form" method="POST">
            @csrf {{--CSRF保護トークン--}}
            <label for="user-name">名前:<input id="user-name" type="text" name="name"></label><br><br>
            <label for="user-mail">メール:<input id="user-mail" type="email" name="email"></label><br><br>
            <input type="submit" value="送信">
        </form>
    </body>
</html>
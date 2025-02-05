<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 新規登録</title>
</head>
<!-- ログイン画面 -->

<body class="">
    <x-header></x-header>
    <div class="page signup-page">
        <h2>課題: ここに新規登録ページを作ること</h2>
        <form class="form" action="/signup" method="post">
            @csrf
            <div class="form-item email">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" />
            </div>

            <div class="form-item password">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" />
            </div>
            @error('email')
             <div class="error-message font-red">{{ $errorMessage }}</div> 
             @enderror
            <div class="signup-button">
                <button class="button-white" type="submit">新規登録</button>
            </div>
        </form>
        <div>
            <div>
                <h3>バリデーションルール</h3>
                <h4>メールアドレス</h4>
                <ul>
                    <li>●●●@×××の形式になっていること</li>
                    <li>半角英数、記号のみを許容すること</li>
                </ul>
                <h4>パスワード</h4>
                <ul>
                    <li>半角英数、記号のみを許容すること</li>
                    <li>8文字以上であること</li>
                </ul>
                <p>
                    JavascriptとUserControllorの両方で同じバリデーションを設けること
                </p>
            </div>
</body>
<script src="{{ asset('/js/app.js') }}"></script>
<style scoped>
    .singup-page {
        display: flex;
        justify-content: center;
    }

    .singup-page .title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }

    .singup-page .form {
        width: 60vw;
    }

    .singup-page input {
        height: 30px;
        border-radius: 10px;
        background-color: lightgray;
    }

    .singup-page .form-item {
        display: flex;
        flex-direction: column;
        margin-top: 10px;
    }

    .singup-page .login-button {
        text-align: center;
        margin-top: 10px;
    }

    .singup-page button {
        width: 50%;
        height: 30px;
        font-size: 18px;
    }

    .singup-page .error-message {
        margin-top: 5px;
        font-size: 10px;
    }
</style>

</html>
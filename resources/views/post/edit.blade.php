<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />

    <title>kadai-app | 投稿編集</title>

</head>
<!-- 投稿編集画面 -->

<body class="">
    <x-header></x-header>
    <div class="page post-edit-page">
        <form action="/post/edit/{{ $post->id }}" method="post">
            @csrf @method('PUT')
            <div class="title">投稿を編集</div>
            <div class="post">
                <textarea name="postContent" id="" cols="30" rows="10">{{ $post->content }}</textarea>
            </div>
            <input type="hidden" name="postid" value="{{$post->id}}" />
            <div class="save-button">
                <button class="button-white">変更を保存</button>
            </div>
            <div class="flex flex-col items-center">
                <label class="w-full max-w-3xl mx-auto">
                    <input
                        class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                        type="text" name="task_name" value="{{ $post }}" />
                    @error('post')
                    <div class="mt-3">
                        <p class="text-red-500">
                            {{ $message }}
                        </p>
                    </div>
                    @enderror
                </label>

            </div>
        </form>
</body>
<x-footer></x-footer>
<script src="{{ asset('/js/app.js') }}"></script>
<style scoped>
    .post-edit-page .post {
        display: flex;
        flex-direction: column;
    }

    .post-edit-page .title {
        padding: 10px 0 0 10px;
    }

    .post-edit-page .save-button {
        display: flex;
        justify-content: end;
        margin: 10px 10px 0 0;
    }
</style>

</html>
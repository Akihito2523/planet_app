<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet create</title>
    <link rel="stylesheet" href="{{ asset('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>惑星情報登録</h1>

    {{-- エラーメッセージの表示 --}}
    @if ($errors->any())
        <div class="error">
            <p>{{ count($errors) }}件のエラーがあります。</p>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="/planet" method="post">
        {{-- 情報を登録する機能 --}}
        @csrf
        <div>
            <label for="name">名前</label>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="english">名前(英語)</label>
            <input type="text" id="english" name="english">
        </div>

        <div>
            <label for="radius">半径</label>
            <input type="number" id="radius" name="radius">
        </div>

        <div>
            <label for="weight">重量</label>
            <input type="number" id="weight" name="weight">
        </div>

        <input type="submit" class="submit" value="登録">
    </form>

    <a href="/planet">戻る</a>
</body>

</html>

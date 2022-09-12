<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet show</title>
    <link rel="stylesheet" href="{{ asset('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <p class="detail">名前:{{ $planet->name }}</p>
    <p class="detail">名前(英語):{{ $planet->english }}</p>
    <p class="detail">半径:{{ $planet->radius }}</p>
    <p class="detail">重量:{{ $planet->weight }}</p>
    <a href="/planet/create">戻る</a>
</body>

</html>

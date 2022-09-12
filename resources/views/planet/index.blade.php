<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planet index</title>
    <link rel="stylesheet" href="{{ asset('css/destyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1>惑星一覧</h1>

    <table class="table">
        <thead>
            <tr>
                <th>名前</th>
                <th>名前(英語)</th>
                <th>半径</th>
                <th>重量</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($planet as $planets)
                <tr>
                    <td>{{ $planets->name }}</td>
                    <td>{{ $planets->english }}</td>
                    <td>{{ $planets->radius }}</td>
                    <td>{{ $planets->weight }}</td>
                    <td><a href="/planet/{{ $planets->id }}">詳細</a></td>
                    <td><a href="/planet/{{ $planets->id }}/edit">編集</a></td>
                    <td>
                        <form action="/planet/{{ $planets->id }}" id="form_recipe" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="削除する" id="btn" class="block"
                                onclick="if(!confirm('削除しますか？')){return false};">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script src="{{ asset('/js/index.js') }}"></script>
    <a href="/planet/create">新規登録</a>
</body>

</html>

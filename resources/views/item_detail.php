<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ショッピングサイト</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
        <table class="d">
            　<tr>
                <th><?=$item->name?></th>
                <th>価格(100g)</th>
                <th>苦味</th>
                <th>コク</th>
                <th>香り</th>
                <th>酸味</th>
                　</tr>
            　<tr>
                <td><img class="img" src="<?=$item->img?>"/></td>
                <td><?=$item->price?>円</td>
                <td><?=$item->bitter?></td>
                <td><?=$item->koku?></td>
                <td><?=$item->kaori?></td>
                <td><?=$item->san?></td>

                　</tr>
        </table>
        <a href="/items" class="return">一覧へ戻る</a>
</body>
</html>

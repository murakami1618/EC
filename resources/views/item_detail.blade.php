<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>商品詳細</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<header>
    <h1>　</h1>
    <form class="form" action="/order" method="get">
        @csrf
        <input class="btn" type="submit" value="購入手続">
    </form>

    <form class="form" action="/top" method="post">
        @csrf
        <input class="btn" type="submit" value="トップページ">
    </form>
    <form class="form" action="/cart" method="post">
        @csrf
        <input class="btn" type="submit" value="カート">
    </form>
</header>
<div class="wrap">
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
        <div class="desc">
            <h3>商品情報</h3>
            <?=$item->description?>
        </div>
        <form action="/top" method="post">
            <?= csrf_field()?>
            <input class="btn" type="submit" value="トップページに戻る">
        </form>
</div>
</body>
</html>

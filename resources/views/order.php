<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注文確認画面</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<header>
        <h1>へっだー</h1>
</header>
<body>
<div class="wrap">
<form action="/order" method="post">
    <?= csrf_field()?>
    <table>
        <tr>
        <th>名前</th>
        <th>住所</th>
        <th>電話番号</th>
        <th>Email</th>
        </tr>
        <td><input type="text" value="" name="name" placeholder=氏名></td>
        <td><input type="text" value="" name="address" placeholder="住所"></td>
        <td><input type="number" value="" name="tel" placeholder="電話番号"></td>
        <td><input type="text" value="" name="email" placeholder="メールアドレス"></td>
        <td><input class="btn" type="submit" value="注文"></td>
    </table>
    <?php
    echo $erro;
    ?>
</div>
</body>
</html>

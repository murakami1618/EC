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
        <td><input type="text" value="" name="name"></td>
        <td><input type="text" value="" name="address"></td>
        <td><input type="text" value="" name="tel"></td>
        <td><input type="text" value="" name="email"></td>
        <td><input class="btn" type="submit" value="注文"></td>
    </table>

</form>
</div>
</body>
</html>

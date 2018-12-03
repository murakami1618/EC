<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>カート</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

<header>
    <form class="form" action="/top" method="post">
        @csrf
        <input class="topbtn" type="submit" value="トップページ">
    </form>
    <form class="form" action="/cart" method="post">
        @csrf
        <input class="topbtn" type="submit" value="カート">
    </form>
    <form class="form" action="/order" method="get">
        @csrf
        <input class="topbtn" type="submit" value="購入手続">
    </form>
</header>
<body>
<div class="wrap">
    <form action="/order" method="POST">
        <?=csrf_field()?>
        名前：<input type="text" name="name" value="<?=$inputs["name"]??''?>" placeholder="名前入力">
        住所：<input type="text" name="address" value="<?=$inputs["address"]??''?>"placeholder="住所入力">
        電話番号：<input type="text" name="tel" value="<?=$inputs["tel"]??''?>"placeholder="電話番号入力">
        Email：<input type="text"  name="email" value="<?=$inputs["email"]??''?>"placeholder="メールアドレス入力">
        <input type="submit" value="注文">
    </form>
    <?php foreach($errors as $errors): ?>
        <h7><?=$errors?></h7>
    <?php endforeach;?>
</div>
</body>
</html>

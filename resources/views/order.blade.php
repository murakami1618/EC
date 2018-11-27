<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>カート</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

<header>
    <h1>　</h1>


    <form class="form" action="/top" method="post">
        @csrf
        <input class="btn" type="submit" value="トップページ">
    </form>
    <form class="form" action="/cart" method="post">
        @csrf
        <input class="btn" type="submit" value="カート">
    </form>
</header>
<body>
<div class="wrap">
    <form action="/order" method="POST">
        <?=csrf_field()?>
        名前：<input type="text" name="name" value="<?=$inputs["name"]??''?>">
        住所：<input type="text" name="address" value="<?=$inputs["address"]??''?>">
        電話番号：<input type="text" name="tel" value="<?=$inputs["tel"]??''?>">
        Email：<input type="text"  name="email" value="<?=$inputs["email"]??''?>">
        <input type="submit" value="注文">
    </form>
    <?php foreach($errors as $errors): ?>
        <h7><?=$errors?></h7>
    <?php endforeach;?>
</div>
</body>
</html>

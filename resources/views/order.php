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
    <form action="/order" method="POST">
        <?=csrf_field()?>
        名前：<input type="text" name="name" value="<?=$inputs["name"]??''?>">
        住所：<input type="text" name="address" value="<?=$inputs["address"]??''?>">
        電話番号：<input type="text" name="tel" value="<?=$inputs["tel"]??''?>">
        Email：<input type="text"  name="email" value="<?=$inputs["email"]??''?>">
        <input type="submit" value="注文">
    </form>

    <?php foreach($errors as $errors): ?>
                <h1><?=$errors->name?></h1>
    <?php endforeach; ?>

</div>
</body>
</html>

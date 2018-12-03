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
<div class="wrap">
    <div class="item">

        <?php foreach($cartItems as $cartItem): ?>
            <table class="been">
                <tr>
                    <th><?=$cartItem->name?></th>
                    <th>値段（100g)</th>
                    <th>産地</th>
                </tr>
                <tr>
                    <td><img class="img" src="<?=$cartItem->img?>"/></td>
                    <td><?=$cartItem->price?>円</td>
                    <td><?=$cartItem->make?></td>
                </tr>
            </table>
        <?php endforeach; ?>
    </div>
        <form class="form" action="/cart/clear" method="post">
            @csrf
            <input class="btn" type="submit" value="カートを空に">
        </form>
    <form class="form" action="/order" method="get">
        @csrf
        <input class="btn" type="submit" value="購入手続">
    </form>
</div>
</body>
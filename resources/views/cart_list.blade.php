<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>カート</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
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


        <form action="/cart/clear" method="post">
            <?= csrf_field()?>
            <input type="submit" value="カートを空に">
        </form>
        <form action="/order" method="get">
            <?= csrf_field()?>
            <input type="submit" value="購入手続">
        </form>
        <form action="/top" method="post">
            <?= csrf_field()?>
            <input type="submit" value="買い物を続ける">
        </form>

</body>
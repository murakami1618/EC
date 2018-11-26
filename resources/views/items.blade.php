<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ショッピングサイト</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
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
    <body>
    <div class="wrap">
    <div class="item">

        <?php foreach($items as $item): ?>
            <table class="been">
                　<tr>
                    <th><?=$item->name?></th>
                    <th>値段（100g)</th>
                    <th>産地</th>
                    <th>詳細</th>
                    <th></th>
                　</tr>
                　<tr>
                    <td><img class="img" src="<?=$item->img?>"/></td>
                    <td><?=$item->price?>円</td>
                    <td><?=$item->make?></td>
                    <td><a href="item/<?=$item->id?>">詳細</a></td>
                    <td>
                        <form action="/cart/add" method="post">
                            <?= csrf_field()?>
                            <input class="btn" type="hidden" name="item_id" value="<?=$item->id?>">
                            <input class="btn" type="submit" value="カートに追加">
                        </form>
                    </td>
                </tr>

            </table>
        <?php endforeach; ?>
    </div>
    </div>
    </body>
</html>
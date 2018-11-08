<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ショッピングサイト</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>

    <body>
    <div class="item">

        <?php foreach($items as $item): ?>
            <table class="been">
                　<tr>
                    <th><?=$item->name?></th>
                    <th>値段（100g)</th>
                    <th>産地</th>
                    <th>詳細</th>
                　</tr>
                　<tr>
                    <td><img class="img" src="<?=$item->img?>"/></td>
                    <td><?=$item->price?>円</td>
                    <td><?=$item->make?></td>
                    <td><a href="item/<?=$item->id?>">詳細</a></td>
                　</tr>
                <form action="/cart/add" method="post">
                    <?= csrf_field()?>
                    <input type="hidden" name="item_id" value="<?=$item->id?>">
                    <input type="submit" value="カートに追加">
                </form>
            </table>
        <?php endforeach; ?>
    </div>
    </body>
</html>
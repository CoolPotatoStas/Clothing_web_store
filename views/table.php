<table class="product_list">
    <tr class="product">
        <td class="image">Фото</td>
        <td class="title">Название</td>
        <td class="size">Размер</td>
        <td class="factory">Материал</td>
        <td class="howmuch">Цена</td>
    </tr>
    <?php
    foreach ($products as $item): ?>
        <tr class="product">
            <td class="image">
                <img class="product-img" src="/assets/tiles/<?=$item['img_name'] ?>" alt="data">
            </td>
            <td class="title">
                <?= $item['title'] ?>
            </td>
            <td class="size">
                <?= $item['size'] ?>
            </td>
            <td class="description">
                <?= $item['description'] ?>
            </td>
            <td class="price">
                <?= $item['price'] ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

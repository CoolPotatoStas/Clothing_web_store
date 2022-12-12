<?php
require_once '../scripts/filters.php';
$id = $_GET['id'];
$product = get_product($id);
?>

<div class="update">
    <h3 class='update__title'>Редактировать</h3>
    <form action='/scripts/update_product.php' method='post' id='update-form' class='update__content'>
        <input hidden name='id' value='<?= $product['id'] ?>'>

        <p>
            Type: <?= $product['type_is'] ?>
        </p>


        <!--        Type: <select name="type" size="1">-->
        <!--            <option selected value="1">Clothes</option>-->
        <!--            <option value="2">Shoes</option>-->
        <!--            <option value="3">Accessories</option>-->
        <!--        </select>-->

        Title: <input type='text' placeholder='Title' name='title' class='create__input' required
                      value="<?= $product['title'] ?>"><br>

        Size: <input type='text' placeholder='Size' name='size' class='create__input' required
                     value="<?= $product['size'] ?>"><br>

        Description: <input type='text' placeholder='description' name='description' class='create__input' required
                            value="<?= $product['description'] ?>"> <br>

        Price: <input type='text' placeholder='price' name='price' class='create__input' required
                      value="<?= $product['price'] ?>"><br>

        Image: <input name="img" type="file"/> <br>

        <div class="update__wrapper">
            <input type='submit' value='Сохранить' name='submit' class='update__button'>
            <a type='button' value='Отмена' class='update__button' href="/admin">Yазад</a>
        </div>
    </form>
</div>
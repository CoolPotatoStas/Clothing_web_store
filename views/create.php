<div class="create">
    <h3 class='create__title'>Добавить</h3>
    <form enctype="multipart/form-data" action='/scripts/create_product.php' method='post' id='create-form'
          class='create__content'>
        Type: <select name="type" size="1">
            <option selected value="1">Clothes</option>
            <option value="2">Shoes</option>
            <option value="3">Accessories</option>
        </select>

        Title: <input type='text' placeholder='Title' name='title' class='create__input' required><br>

        Size: <input type='text' placeholder='Size' name='size' class='create__input' required><br>

        Description: <input type='text' placeholder='description' name='description' class='create__input' required><br>

        Price: <input type='text' placeholder='price' name='price' class='create__input' required><br>

        Image: <input name="img" type="file"/> <br>

        <div class="create__wrapper">
            <input type='submit' value='Добавить' name='submit' class='create__button'>
            <a type='button' value='Отмена' class='create__button' href="/admin">Назад</a>
        </div>
    </form>
</div>
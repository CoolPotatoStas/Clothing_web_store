<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Магазин одежды</title>
    <link rel="stylesheet" href="styles/index_style.css">
</head>

<body>

<header>
    <img id="header" src="resource/header.png" alt="arakis_CL_header">
</header>

<input type="checkbox" id="side-checkbox" />

<div class="side-panel">
    <label class="side-button-2" for="side-checkbox">+</label>
    <div class="side-title">Arakis CL</div>
    <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="?type=1">Одежда</a></li>
        <li><a href="?type=2">Обувь</a></li>
        <li><a href="?type=3">Аксессуары</a></li>
        <li><a href="about.php">Об авторе</a></li>
        <li><a href="firm.php">О фирме</a></li>
        <li><a href="admin.php">Админка</a></li>

    </ul>
    <img id="main" src="resource/logo_arakis_cl.png" alt="arakis_CL_header">
</div>


<div class="side-button-1-wr">
    <label class="side-button-1" for="side-checkbox">
        <div class="side-b side-open">Главное меню</div>
        <div class="side-b side-close">Главное меню</div>
    </label>
</div>

<div class="main_info">
    <main class="content"><?= $content ?></main>
</div>

<footer>
    <p>&copy; Copyright Arakis CL</p>
    <p>Почта: <a href="aaa@aaa.ru" id="spec">aaa@aaa.ru</a></p>
</footer>
</body>

</html>
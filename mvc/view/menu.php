<br>
<?php if (isset($_SESSION['username'])) : ?>
    <a href="/">Главная</a>
    <a href="/?controller=tasks">Задачи</a>
    <p>Рады вас приветствовать, <?= $username ?>. <a href="/?controller=security&action=logout">[Выход]</a></p>
<?php else : ?>
    <a href="/">Главная</a>
    <a href="/?controller=security">Авторизация</a>
<?php endif;?>



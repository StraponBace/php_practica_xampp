<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pop it MVC</title>
    <style>
        <?php include 'style.css'; ?>
    </style>
</head>
<body>
<header>
    <h1>Отдел кадров</h1>
    <?php
    if (!app()->auth::check()):
        ?>
        <p>Авторизируйтесь чтобы получить доступ к функционалу</p>
    <?php
    else:
        ?>
        <nav>
            <?php
            if (app()->auth::role() == "1"):
            ?>
            <a href="<?= app()->route->getUrl('/add_new_employee') ?>">Добавить нового сотрудника</a>
            <?php
            elseif:
            ?>
            <a href="<?= app()->route->getUrl('/add_employee') ?>">Добавить сотрудника</a>
            <a href="<?= app()->route->getUrl('/add_department') ?>">Добавить подразделение</a>
            <a href="<?= app()->route->getUrl('/attach_employee') ?>">Прикрепить сотрудника</a>
            <a href="<?= app()->route->getUrl('/list_employees') ?>">Списки сотрудника</a>
            <?php
            endif;
            ?>
        </nav>
        <nav>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        </nav>
    <?php
    endif;
    ?>
    <nav>
        <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
<!--            <a href="--><?php //= app()->route->getUrl('/signup') ?><!--">Регистрация</a>-->
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
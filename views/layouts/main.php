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
        <style>
            header{
                gap: 23em;
            }
        </style>
    <?php
    else:
        ?>
        <nav>
<!--            --><?php
//            if (app()->auth::role() == "admin"):
//            ?>
            <a href="<?= app()->route->getUrl('/add_employee') ?>">Добавить нового сотрудника</a>
<!--            --><?php
//            elseif (app()->auth::role() == "employee"):
//            ?>
            <a href="<?= app()->route->getUrl('/add_employee') ?>">Добавить сотрудника</a>
            <a href="<?= app()->route->getUrl('/add_department') ?>">Добавить подразделение</a>
            <a href="<?= app()->route->getUrl('/attach_employee') ?>">Прикрепить сотрудника</a>
            <a href="<?= app()->route->getUrl('/list_employees') ?>">Сотрудники по подразделениям</a>
            <a href="<?= app()->route->getUrl('/list_employees_compound') ?>">Сотрудники по составу</a>
            <a href="<?= app()->route->getUrl('/employees_age') ?>">Возраст по подразделениям</a>
<!--            --><?php
//            endif;
//            ?>
        </nav>
        <nav>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        </nav>
        <style>
            header{
                justify-content: space-between;
            }
        </style>
    <?php
    endif;
    ?>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
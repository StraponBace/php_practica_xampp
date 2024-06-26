<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <button>Войти</button>
    </form>
<?php endif; ?>

<style>
    form{
        margin-top: 1em;
        display: flex;
        flex-direction: column;
        gap: 1em;
        width: 20em;
    }
    input{
        height: 2em;
        padding-left: 0.5em;
    }
    button{
        height: 2em;
    }
</style>

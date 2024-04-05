<h2>Добавление подразделения</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <input type="text" name="name" placeholder="Название подразделения">
    <input type="text" name="species" placeholder="Вид подразделения">
    <button>Добавить</button>
</form>

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


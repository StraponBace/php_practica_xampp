<h2>Добавление нового сотрудника</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="patronymic" placeholder="Отчество">
    <select name="gender" id="gender">
        <option value="man">Мужик</option>
        <option value="woman">Женщина</option>
    </select>
    <input type="date" name="date_birth" placeholder="Дата рождения">
    <input type="text" name="address" placeholder="Адрес прописки">
    <input type="text" name="position" placeholder="Должность">
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


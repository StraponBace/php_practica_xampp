<h2>Список сотрудников по составу</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <select name="structure" id="structure">
        <option value="value">value_structure</option>
    </select>
    <button>Обновить список</button>
</form>

<ul>
    <li>
        <div>
            <div class="fio">
                <p>Фамилия</p>
                <p>Имя</p>
                <p>Отчество</p>
            </div>
            <p>Гендер</p>
            <p>Дата рождения</p>
            <p>Адрес прописки</p>
            <p>Должность</p>
        </div>
    </li>
</ul>

<style>
    form{
        margin-top: 1em;
        display: flex;
        flex-direction: column;
        gap: 1em;
        width: 20em;
    }
    input, select{
        height: 2em;
        padding-left: 0.5em;
    }
    button{
        height: 2em;
    }
    .fio{
        display: flex;
        gap: 1em;
    }
</style>


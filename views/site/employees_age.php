<h2>Подсчёт среднего возраста</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <label for="department">
        Подразделение
        <input type="checkbox" name="department">
    </label>
    <button>Обновить список</button>
</form>

<ul>
    <li>
        <div>
            <div class="dep-and-age">
                <p>Подразделение:</p>
                <p>Средний_возраст</p>
            </div>
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
    button{
        height: 2em;
    }
    .dep-and-age{
        display: flex;
        gap: 1em;
    }
</style>


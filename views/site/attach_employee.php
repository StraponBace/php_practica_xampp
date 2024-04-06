<h2>Прикрепление сотрудника</h2>
<h3><?= $message ?? ''; ?></h3>

<form method="post">
    <select name="employee" id="employee">
        <option value="value">value_employee</option>
    </select>
    <select name="department" id="department">
        <option value="value">value_department</option>
    </select>
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
    input, select{
        height: 2em;
        padding-left: 0.5em;
    }
    button{
        height: 2em;
    }
</style>


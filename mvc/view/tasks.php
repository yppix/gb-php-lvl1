<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<?php include "menu.php" ?>

<h3>Ваши задачи</h3>

<?php if (!$tasks) { ?>
    <h4>Нет задач</h4>
<?php } else {
    $i = 0;
    foreach ($tasks as $task):?>
        <div>
            <span style="margin-right: 20px"><?= $task->getDescription() ?></span>
            <?php if ($task->getIsDone() == 1) { ?>
                <span>Выполнено</span>
            <?php } else { ?>
                <span>Еще не выполнено</span>
            <?php } ?>
            <div>
                <a href="/?controller=tasks&action=markDone&index=<?= $i ?>">Хочу отметить выполненной задачу</a>
            </div>
        </div>
        <?php $i++; endforeach;
} ?>

<a href="/?controller=tasks&action=getAllUndone"
   style="border:1px solid red; padding: 20px; text-decoration: none; color:black; margin:25px; display: block; width: 300px;">
    Вывести невыполненные задачи отдельно
</a>

<?php if ($undoneTasks) {
    foreach ($undoneTasks as $undoneTask):?>
        <div>
            <span style="margin-right: 20px"><?= $task->getDescription() ?></span>
        </div>
<?php endforeach;} ?>

<h3 style="margin-top: 40px">Добавить новую задачу</h3>
<form method="post">
    <div>
        <label for="description">Описание задачи</label>
        <input type="text" id="description" name="description" placeholder="Описание задачи" required autofocus="">
    </div>
    <div>
        <h5>Выполнено</h5>
        <input
            type="radio" id="isDoneYes"
            name="isDone" value="Да">
        <label for="isDoneYes">Да</label>
        <input
            type="radio" id="isDoneNo"
            name="isDone" value="Нет" checked>
        <label for="isDoneNo">Нет</label>
    </div>

    <button type="submit">Добавить</button>
    <div>
        <?= $error ?>
    </div>
</form>


</body>
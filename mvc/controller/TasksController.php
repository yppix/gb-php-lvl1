<?php
require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';
session_start();

if (empty($_SESSION['username'])) {
    header("Location: index.php");
}

$username = null;
if (isset($_SESSION['username'])) {
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}

$taskProvider = new TaskProvider();

if (isset($_POST['description'])) {

    if ($_POST['isDone']==='Нет'){
        $isDoneStr = false;
    } else {
        $isDoneStr = true;
    }

    ['description' => $description] = $_POST;
    $task = $taskProvider->addTask($description, $isDoneStr);
    if ($task === null) {
        $error = 'Задача не добавлена';
    } else {
        $_SESSION['tasks'][] = $task;
        header("Location: ?controller=tasks");
    }
}

if (isset($_GET['action']) && $_GET['action'] === 'markDone') {
    $index = $_GET['index'];
    $task = $_SESSION['tasks'][$index];
    $task->markAsDone();
    header("Location: ?controller=tasks");
}

if (isset($_GET['action']) && $_GET['action'] === 'getAllUndone') {
    echo "<pre>";
    print_r($_SESSION['tasks']);
    echo "</pre>";

    if($taskProvider->getUndoneList($_SESSION['tasks'])){
        $undone = $taskProvider->getUndoneList($_SESSION['tasks']);
    }

    $_SESSION['undoneTasks'] = $undone;

    header("Location: ?controller=tasks");
}

$tasks = $_SESSION['tasks'];
$undoneTasks = $_SESSION['undoneTasks'];

include "view/tasks.php";
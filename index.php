<?php

include "Task.php";
include "User.php";
include "TaskService.php";
include "Comment.php";

$user = new User('Vova', 'ffff@mm.r', 'male', true);
$task = new Task('do it', 1, $user);


TaskService::addComment($user, $task, 'faster');
TaskService::addComment($user, $task, 'stronger');

foreach($task->getComments() as $comment){
    echo $comment->getText();
}
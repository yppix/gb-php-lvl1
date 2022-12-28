<?php

class TaskService
{
    public static function addComment(User $user, Task $task, string $text): void
    {
       $task->setComments(new Comment($user, $task, $text));
    }
}

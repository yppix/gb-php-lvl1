<?php

class TaskProvider
{
    public function getUndoneList(array $tasks): array
    {
        $undoneTasks = [];
        $i = 0;

        foreach ($tasks as $task) {

            if(!$task->getIsDone()) {
                $undoneTasks[$i] = $task;
            }
            $i++;
        }
        return $undoneTasks ?? false;
    }

    public function addTask (string $description, bool $isDone)
    {
        return new Task($description, $isDone);
    }
}

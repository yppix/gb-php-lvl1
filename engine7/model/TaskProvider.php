<?php

class TaskProvider
{
    //хранилище задач
    private PDO $pdo;
    private array $tasks;

    public function __construct(PDO $pdo)
    {
        //при создании хранилища читаем задачи из сессии
        $this->pdo = $pdo;
        $this->tasks = $_SESSION['tasks'] ?? [];
    }


    /**
     * Метод возвращающий массив не выполненных задач из объекта
     * @return array
     */
    public function getUndoneList(): array
    {


        /*
         return array_map(function (Task $task) {
                    return $task->isDone() ?: $task;
                }, $this->tasks);
        */


        /**
         * @var Task $task
         */
        $tasks = [];
        foreach ($this->tasks as $key => $task) {
            if (!$task->isDone()) {
                $tasks[$key] = $task;
            }
        }


        return $tasks;
    }

    public function addTask(Task $task): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (description, isDone, userId) VALUES (:description, :isDone, :userId)'
        );

        return $statement->execute([
            'description' => $task->getDescription(),
            'isDone' => $task->isDone(),
            'userId' => $_SESSION['user']->getUserId()
        ]);
    }

    public function deleteTask(int $key): void
    {
        unset($_SESSION['tasks'][$key]);
        unset($this->tasks[$key]);
    }


}
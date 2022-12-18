<?php
define('__ROOT__', dirname(dirname(__FILE__)));

require_once(__ROOT__ . '\gb-php-lvl1\main-1.php');
require_once(__ROOT__ . '\gb-php-lvl1\main-help.php');

class Comment
{
    public string $author;
    public string $task;
    private array $text;

    public function __construct(array $text)
    {
        $this->text = $text;
    }

    public function addComment(User $user, Task $task)
    {
        $task->setComments($this->getText());
    }

    private function getText(): array
    {
        return $this->text;
    }

    private function setText(array $text)
    {
        $this->text = $text;
    }
}

class TaskService
{
    public static function addComment(User $user, Task $task, array $text)
    {
        return (new Comment($text))->addComment($user, $task);
    }
}

$task = new Task('sleep');
$user = new User ('vano', 'test-mail', 'm');
TaskService::addComment($user, $task, ['go', 'no']);
print_r($task);
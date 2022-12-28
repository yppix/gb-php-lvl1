<?php

class Comment
{
    //private User    $author;
    //private Task    $task;
    //private string $text;

    private $author;
    private $task;
    private $text;

    public function __construct(User $author, Task $task, string $text)
    {
        $this->text   = $text;
        $this->author = $author;
        $this->task   = $task;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }

    public function setAuthor(User $author)
    {
        $this->author = $author;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function setTask(Task $task)
    {
        $this->task = $task;
    }
}
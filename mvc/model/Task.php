<?php

class Task
{
    //private string   $description;
    //private ?bool    $isDone;

    private $description;
    private $isDone;

    public function __construct(string $description, bool $isDone)
    {
        $this->description = $description;
        $this->isDone    = $isDone;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getIsDone(): ?bool
    {
        return $this->isDone;
    }

    public function setIsDone(bool $isDone)
    {
        $this->isDone = $isDone;
    }

    public function markAsDone($isDone = true)
    {
        $this->setIsDone($isDone);
    }
}
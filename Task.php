<?php

class Task
{
    //private string   $description;
    //private DateTime $dateCreated;
    //private DateTime $dateUpdated;
    //private DateTime $dateDone;
    //private int      $priority;
    //private ?bool     $isDone;
    //private User     $user;
    //private ?array    $comments = [];

    private $description;
    private $dateCreated;
    private $dateUpdated;
    private $dateDone;
    private $priority;
    private  $isDone;
    private $user;
    private $comments = [];

    public function __construct(string $description, int $priority, User $user)
    {
        $this->description = $description;
        $this->priority    = $priority;
        $this->user        = $user;
        $this->dateCreated = new DateTime();
        $this->dateUpdated = new DateTime();
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated();
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments(Comment $comment): void
    {
        $this->comments[] = $comment;
        $this->setDateUpdated();
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
        $this->setDateUpdated();
    }

    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    private function setDateCreated()
    {
        $this->dateCreated = new DateTime();
    }

    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    private function setDateUpdated()
    {
        $this->dateUpdated = new DateTime();
    }

    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    private function setDateDone()
    {
        $this->dateDone = new DateTime();
    }

    public function getIsDone(): ?bool
    {
        return $this->isDone;
    }

    public function setIsDone(bool $isDone)
    {
        $this->isDone = $isDone;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;
        $this->setDateUpdated();
    }

    public function markAsDone()
    {
        $this->setIsDone(true);
        $this->setDateUpdated();
        $this->setDateDone();
    }
}
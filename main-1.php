<?php
define('__ROOT__', dirname(dirname(__FILE__)));

require_once(__ROOT__ . '\gb-php-lvl1\main-help.php');

class Task
{
    private string   $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int      $priority;
    private bool     $isDone;
    private User     $user;
    private array    $comments = [];

    public function __construct(string $description)
    {
        $this->description = $description;
        $this->dateCreated = new DateTime();
        $this->dateUpdated = new DateTime();
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
        $this->setDateUpdated();
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function setComments(array $text)
    {
        $this->comments = $text;
        $this->setDateUpdated();
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(int $priority)
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
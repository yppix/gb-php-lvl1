<?php

class User
{
    private string   $username;
    private string   $email;
    private ?string  $sex;
    private ?int     $age;
    private bool     $isActive = true;
    private DateTime $dateCreated;

    public function __construct(string $username, string $email, ?string $sex)
    {
        $this->username    = $username;
        $this->email       = $email;
        $this->sex         = $sex;
        $this->dateCreated = new DateTime();
    }

    public function setAge(?int $age): void
    {
        if ($age == null) {
            $this->age = null;
        } elseif ($age > 0 && $age <= 125) {
            $this->age = $age;
        }
    }

    function getAge(): ?int
    {
        return $this->age;
    }

}

$task = new User('vano', 'fffff', 'm');
print_r($task);
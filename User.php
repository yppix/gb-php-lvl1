<?php

class User
{
    //private string   $username;
    //private string   $email;
    //private ?string  $sex;
    //private ?int     $age;
    //private bool     $isActive = true;
    //private DateTime $dateCreated;

    private $username;
    private $email;
    private $sex;
    private $age;
    private $isActive = true;
    private $dateCreated;

    public function __construct(string $username, string $email, ?string $sex, ?bool $isActive)
    {
        $this->username    = $username;
        $this->email       = $email;
        $this->isActive    = $isActive;
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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getEmail(): ?string
    {
        return $this->username;
    }
}
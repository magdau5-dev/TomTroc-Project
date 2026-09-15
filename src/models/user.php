<?php

class User
{
    private ?int $id = null;
    private string $username;
    private string $email;
    private string $password;
    private ?string $avatar = null;

    public function __construct(
        string $username,
        string $email,
        string $password,
        ?string $avatar = null
    ) {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->avatar = $avatar;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }
}
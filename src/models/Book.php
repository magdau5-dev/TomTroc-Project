<?php

class Book
{
    private ?int $id = null;

    private int $userId;

    private string $title;

    private string $author;

    private string $description;

    private ?string $image;

    private string $disponibilite;


    public function __construct(
        int $userId,
        string $title,
        string $author,
        string $description,
        ?string $image,
        string $disponibilite
    ) {
        $this->userId = $userId;
        $this->title = $title;
        $this->author = $author;
        $this->description = $description;
        $this->image = $image;
        $this->disponibilite = $disponibilite;
    }


    public function getId(): ?int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getUserId(): int
    {
        return $this->userId;
    }


    public function getTitle(): string
    {
        return $this->title;
    }


    public function getAuthor(): string
    {
        return $this->author;
    }


    public function getDescription(): string
    {
        return $this->description;
    }


    public function getImage(): ?string
    {
        return $this->image;
    }


    public function getDisponibilite(): string
    {
        return $this->disponibilite;
    }
}
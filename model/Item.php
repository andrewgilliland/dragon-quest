<?php

class Item {
    private string $name;
    private string $description;
    private string $image;
    private string $type;
    private int $id;

    public function __construct(string $name, string $description, string $image, string $type, int $id)
    {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->type = $type;
        $this->id = $id;
    }

    public function getName(): string
    {
        return htmlspecialchars($this->name);
    }

    public function getDescription(): string
    {
        return htmlspecialchars($this->description);
    }

    public function getImage(): string
    {
        return htmlspecialchars($this->image);
    }

    public function getType(): string
    {
        return htmlspecialchars($this->type);
    }
    
    public function getId(): int
    {
        return $this->id;
    }
}
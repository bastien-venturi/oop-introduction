<?php

declare(strict_types=1);

class Article
{
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;
    public string $author;

    public function __construct(int $id, string $title, ?string $description, ?string $publishDate, string $author)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->author = $author;
    }

    public function getPublishDateFormatted($format = 'd-m-Y'): ?string
    {
        if ($this->publishDate === null) {
            return 'Date not available';
        }

        // Convert the date string to a timestamp
        $timestamp = strtotime($this->publishDate);

        // Check if date conversion is successful
        if ($timestamp === false) {
            return 'Invalid date format';
        }

        // Format the timestamp according to the specified format
        $formattedDate = date($format, $timestamp);

        // Return the formatted date
        return $formattedDate;
    }

    public function getPublishDate(): ?string
    {
        return $this->getPublishDateFormatted();
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
}
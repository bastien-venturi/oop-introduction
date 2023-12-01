<?php

declare(strict_types=1);

class Article
{
    public int $idarticle;
    public string $title;
    public string $description;
    public string $publishDate;
    public string $authorName;


    public function __construct(int $idarticle, string $title, string $description, string $publishDate, string $authorName)
    {
        $this->idarticle = $idarticle;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->authorName = $authorName;
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

    public function getPublishDate(): string
    {
        return $this->getPublishDateFormatted();
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function getId(): int
    {
        return $this->idarticle;
    }
    public function getAuthor(): string
    {
        return $this->authorName;
    }
}
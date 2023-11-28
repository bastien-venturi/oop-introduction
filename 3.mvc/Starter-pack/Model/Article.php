<?php

declare(strict_types=1);

class Article
{
    public string $title;
    public ?string $description;
    public ?string $publishDate;

    public function __construct(string $title, ?string $description, ?string $publishDate)
    {
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
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
}


// // Example usage
// $article = new Article('Article Title', 'Article Description', '2023-11-28');
// $formattedDate = $article->formatPublishDate('d-m-Y');
// echo $formattedDate;

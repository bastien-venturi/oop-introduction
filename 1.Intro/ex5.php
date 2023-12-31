<?php

declare(strict_types=1);

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    // Method to get the private price property
    public function getPrice(): float
    {
        return $this->price;
    }

    // Method to set a new price
    public function setPrice(float $newPrice): void
    {
        $this->price = $newPrice;
    }
}

// Instantiate an object representing cola
$cola = new Beverage("black", 2.0);

// Set a new price for the cola
$cola->setPrice(3.5);

// Print the getInfo on the screen
echo $cola->getInfo() . PHP_EOL;

// Print the temperature on the screen
echo "Temperature: {$cola->getTemperature()}" . PHP_EOL;

// Print the price on the screen
echo "Price: {$cola->getPrice()} euro" . PHP_EOL;

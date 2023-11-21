<?php

declare(strict_types=1);

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;

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
}

// Instantiate an object representing cola
$cola = new Beverage("black", 2.0);

// Print the getInfo on the screen
echo $cola->getInfo() . PHP_EOL;

// Print the temperature on the screen
echo "Temperature: {$cola->getTemperature()}" . PHP_EOL;

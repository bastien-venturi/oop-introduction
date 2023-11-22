<?php

declare(strict_types=1);

class Beverage {

    protected $name;
    protected $color;
    protected $price;
    protected $temperature;

    public function __construct(string $name, string $color, float $price, string $temperature = "cold") {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        echo "This beverage is " . $this->temperature . " and " . $this->color . ". <br><br>";
    }

    public function getTemperature() {
        return $this->temperature;
    }

    public function getName() {
        return $this->name;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor(string $color) {
        $this->color = $color;
    }
}

class Beer extends Beverage {
    
    protected $alcoholpercentage;

    public function __construct(string $name, string $color, float $price, float $alcoholpercentage) {
        parent::__construct($name, $color, $price);
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage() {
        return $this->alcoholpercentage . "%";
    }

    public function getBeerInfo() {
        echo parent::getInfo();
        echo "Hi, I'm " . $this->name . " and have an alcohol percentage of " . $this->alcoholpercentage . "% and I have a " . $this->color . " color.";
    }
}

$duvel = new Beer("Duvel", "blond", 3.5, 8.5);
$duvel->setColor("light");

echo "Alcohol percentage: " . $duvel->getAlcoholpercentage() . "<br><br>";
$duvel->getBeerInfo();

<?php

declare(strict_types=1);

class Beverage {

    public $color;
    public $price;
    public $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo() {
        return "This beverage is " . $this->temperature . " and " . $this->color . ".";
    }

    public function getTemperature() {
        return $this->temperature;
    }
}

class Beer extends Beverage {

    public $name;
    public $alcoholpercentage;

    public function __construct(string $color, float $price, string $name, float $alcoholpercentage, string $temperature = "cold") {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage() {
        return $this->alcoholpercentage . "%";
    }

    public function getInfo() {
        return parent::getInfo() . " The name of this beer is " . $this->name . " and the alcohol percentage is " . $this->alcoholpercentage . "%.";
    }
}

$cola = new Beverage("black", 2.0);
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo $cola->getInfo() . "<br><br>";
echo "Alcohol percentage: " . $duvel->getAlcoholpercentage() . "<br><br>";
echo $duvel->getInfo() . "<br><br>";
echo "Temperature: " . $cola->getTemperature() . "<br><br>";

?>

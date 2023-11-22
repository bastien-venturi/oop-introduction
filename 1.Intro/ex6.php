<?php

declare(strict_types=1);

class Beverage {

    private $color;
    private $price;
    private $temperature;

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

    public function getBarName() {
        return BARNAME;
    }
}

class Beer extends Beverage {

    private $name;
    private $alcoholpercentage;

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

    public function getBarName() {
        return parent::getBarName(); // Inheriting from Beverage class
    }
}

const BARNAME = 'Het Vervolg';

$cola = new Beverage("black", 2.0);
$duvel = new Beer("blond", 3.5, "Duvel", 8.5);

echo BARNAME . "<br>";
echo $cola->getBarName() . "<br>";
echo $duvel->getBarName() . "<br>";

echo $cola->getInfo() . "<br>";
echo $duvel->getAlcoholpercentage() . "<br>";
echo $duvel->getInfo() . "<br>";

echo "Temperature: " . $cola->getTemperature() . "<br>";
echo "<br>";

?>

<?php

declare(strict_types=1);

class Beverage {

    private $name;
    private $color;
    private $price;
    private $temperature;

    public function __construct(string $name, string $color, float $price, string $temperature = "cold") {
        $this->name = $name;
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

    public function getName() {
        return $this->name;
    }
}

class Beer extends Beverage {
    
    private $alcoholpercentage;

    public function __construct(string $name, string $color, float $price, float $alcoholpercentage) {
        parent::__construct($name, $color, $price);
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholpercentage() {
        return $this->alcoholpercentage . "%";
    }

    public function getInfo() {
        return parent::getInfo() . " The name of this beer is " . $this->getName() . " and the alcohol percentage is " . $this->alcoholpercentage . "%.";
    }
}

$duvel = new Beer("Duvel", "blond", 3.5, 8.5);

echo "Alcohol percentage: " . $duvel->getAlcoholpercentage() . "<br><br>";
echo $duvel->getInfo() . "<br><br>";

?>

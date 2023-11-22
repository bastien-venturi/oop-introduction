<?php

declare(strict_types=1);

class Beverage {

    private $color;
    private $price;
    private $temperature;
    private static $address = "Melkmarkt 9, 2000 Antwerpen"; // Changed to protected

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

    public static function getAddress() {
        return self::$address;
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

// Print the address without creating a new instance of the Beverage class
echo "Address (Method 1): " . Beverage::getAddress() . "<br>";

// Alternative way to print the address without creating a new instance of the Beverage class
echo "Address (Method 2): " . Beverage::$address . "<br>";

?>

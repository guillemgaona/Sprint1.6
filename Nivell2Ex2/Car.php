<?php
require_once('Turbo.php');

class Car {
    private string $brand;
    private string $licensePlate;
    private string $fuelType;
    private int $maxSpeed;

    use turbo;

    public function __construct(string $brand, string $licensePlate, string $fuelType, int $maxSpeed) {
        $this->brand = $brand;
        $this->licensePlate = $licensePlate;
        $this->fuelType = $fuelType;
        $this->maxSpeed = $maxSpeed;
    }

    public function __toString():string {
        return "Brand: " . $this->brand . " License plate: " . $this->licensePlate . " Fuel type: " . $this->fuelType . " Max speed: " . $this->maxSpeed . "km/h <br>";
    }
}
?>
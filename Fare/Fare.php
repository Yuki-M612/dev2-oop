<?php
class Fare {
    private $age;
    private $distance;

    public function setValues($age, $distance) {
        $this->age = $age;
        $this->distance = $distance;
    }

public function computeFare() {
    // if ($this->age <= 10 || $this->age >= 80) {
    //     return "Sorry, e not allowed to ride.";
    // }

    if ($this->distance <= 4) {
        $fare = 8;
    } else {
        $fare = $this->distance + 4;
    }

    if ($this->age >= 60) {
        $fare *= 0.8;
    }

    return "Fare: " . number_format($fare, 2);
}
}
?>
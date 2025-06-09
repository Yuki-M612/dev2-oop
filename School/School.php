<?php
class School {
    private $name;
    private $yearLevel;
    private $totalUnits;
    private $labOption;

    private $unit1 = 550;
    private $unit2 = 630;
    private $unit3 = 470;
    private $unit4 = 501;

    private $labFee1 = 3359;
    private $labfee2 = 4000;
    private $labfee3 = 2890;
    private $labfee4 = 3555;

    public function setValues($name, $yearLevel, $totalUnits, $labOption) {
        $this->name = $name;
        $this->yearLevel = $yearLevel;
        $this->totalUnits = $totalUnits;
        $this->labOption = $labOption;
    }

    public function calculateFee() {
        $unitRate = 0;
        $labFee = 0;

        if ($this->yearLevel == 1) {
            $unitRate = $this->unit1;
            $labFee = $this->labFee1;
        } elseif ($this->yearLevel == 2) {
            $unitRate = $this->unit2;
            $labFee = $this->labfee2;
        } elseif ($this->yearLevel == 3) {
            $unitRate = $this->unit3;
            $labFee = $this->labfee3;
        } elseif ($this->yearLevel == 4) {
            $unitRate = $this->unit4;
            $labFee = $this->labfee4;
        } else {
            return "Invalid year level.";
        }

        $tuition = $this->totalUnits * $unitRate;

        if ($this->labOption === "withLab") {
            $tuition += $labFee;
        }

        return $tuition;
    }

    public function getName() {
        return $this->name;
    }

    public function getYearLevel() {
        return $this->yearLevel;
    }

    public function getTotalUnits() {
        return $this->totalUnits;
    }

    public function getLabOption() {
        return $this->labOption;
    }
}
?>
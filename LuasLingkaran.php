<?php

namespace App\Math;

class LuasLingkaran {

    public const PHI = 3.14;
    private int $jari;

    public function __construct($j = 10) {
        $this->jari = $j;
    }

    public function getLuas() {
        return self::PHI * ($this->jari * $this->jari);
    }
}

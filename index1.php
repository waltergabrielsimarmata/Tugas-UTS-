<?php

class LuasLingkaran {

    public const PHI = 3.14;
    public int $jari;

    public function __construct($j = 10) {
        $this->jari = $j;
        echo "Constructor dijalankan<br>";
    }

    public function hitung() {
        $hasil = self::PHI * ($this->jari * $this->jari);
        echo "Luas lingkaran: {$hasil}";
    }

    public function __destruct() {
        echo "<br>Destructor dijalankan...";
    }
}

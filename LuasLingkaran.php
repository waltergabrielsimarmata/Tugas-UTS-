<?php

class LuasLingkaran {

    public const PHI = 3.14;
    public int $jari = 10;

    public function tampil() {
        $hasil = self::PHI * ($this->jari * $this->jari);
        echo "Luas lingkaran: {$hasil}";
    }

    public static function sapa() {
        echo "<br>Ini static method";
    }
}

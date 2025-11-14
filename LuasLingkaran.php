<?php

class Lingkaran
{
    // Pertemuan 3: Property dan Constant
    public $jariJari;
    const PI = 3.14;

    // Pertemuan 5: Constructor
    public function __construct($r)
    {
        $this->jariJari = $r;
        echo "Object Lingkaran dibuat dengan jari-jari: $r <br>";
    }

    // Pertemuan 4: Method
    public function hitungLuas()
    {
        return self::PI * $this->jariJari * $this->jariJari;
    }

    // Pertemuan 4: Static Method
    public static function info()
    {
        return "Class untuk menghitung luas lingkaran";
    }

    // Pertemuan 6: Access modifier (private)
    private function contohPrivate()
    {
        return "Ini method private, tidak bisa dipanggil dari luar class.";
    }

    // Pertemuan 5: Destructor
    public function __destruct()
    {
        echo "<br>Object Lingkaran dihancurkan.";
    }
}
?>

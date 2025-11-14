<?php
require 'LuasLingkaran.php';

echo Lingkaran::info() . "<br><br>";

$ling = new Lingkaran(7);

echo "Luas lingkaran = " . $ling->hitungLuas();
?>

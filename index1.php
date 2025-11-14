<?php

require_once('./LuasLingkaran.php');

$obj = new LuasLingkaran();

echo "Nilai PHI: " . LuasLingkaran::PHI . "<br>";
echo "Jari-jari: " . $obj->jari;

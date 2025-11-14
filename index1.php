<?php

require_once('./LuasLingkaran.php');

use App\Math\LuasLingkaran;

$ling = new LuasLingkaran(10);

echo "Luas lingkaran: " . $ling->getLuas();

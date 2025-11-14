<?php

require_once('./LuasLingkaran.php');

use App\Math\LuasLingkaran;

$ling = new LuasLingkaran(10);
$ling->tampil('roda');
LuasLingkaran::testing();

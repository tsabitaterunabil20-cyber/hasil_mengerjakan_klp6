<?php

$cuaca_panas = true;

if ($cuaca_panas) {
    echo "Saya akan membeli es kopi dingin.<br>";
}


$cuaca = "hujan";

if ($cuaca == "hujan") {
    echo "Saya tidak akan membeli es kopi.<br>";
}


$kopi_panas = true;

if ($kopi_panas) {
    echo "Saya akan meminumnya perlahan.<br>";
} else {
    echo "Kopi akan dihangatkan terlebih dahulu sampai hangat.<br>";
}


$jenis_kopi = "latte";

if ($jenis_kopi == "cappuccino") {
    echo "Menambahkan bubuk cokelat.<br>";
} elseif ($jenis_kopi == "latte") {
    echo "Menambahkan gula.<br>";
} elseif ($jenis_kopi == "americano") {
    echo "Menambahkan sedikit gula.<br>";
} elseif ($jenis_kopi == "espresso") {
    echo "Langsung meminumnya.<br>";
} elseif ($jenis_kopi == "mocha") {
    echo "Menambahkan whipped cream.<br>";
} elseif ($jenis_kopi == "habis") {
    echo "Membeli kopi lagi.<br>";
} else {
    echo "Bertanya kepada penjual.<br>";
}


$kopi_pahit = true;
$ada_gula = false;

if ($kopi_pahit) {
    if ($ada_gula) {
        echo "Kopi siap diminum.<br>";
    } else {
        echo "Tambahkan gula terlebih dahulu.<br>";
    }
}


$kopi_dingin = true;
$rasa = "pahit";

if ($kopi_dingin && $rasa == "manis") {
    echo "Langsung meminumnya.<br>";
} elseif ($kopi_dingin && $rasa == "pahit") {
    echo "Menambahkan gula terlebih dahulu.<br>";
}


$jenis_kopi = "espresso";
$topping_cream = false;

if ($jenis_kopi == "latte" || $topping_cream) {
    echo "Menikmati kopi dengan santai.<br>";
} elseif ($jenis_kopi == "espresso" || !$topping_cream) {
    echo "Meminumnya dengan cepat.<br>";
}

?>
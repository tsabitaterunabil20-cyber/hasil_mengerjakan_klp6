<?php

$bangun_awal = true;

if ($bangun_awal) {
    echo "Kita dapat berjogging pada pagi hari.<br>";
}


$bangun_awal = false;

if ($bangun_awal) {
    echo "Kita berjogging pagi hari.<br>";
} else {
    echo "Kita berjogging di bawah teriknya matahari.<br>";
}


$matahari = "terik";

if ($matahari == "terik") {
    echo "Kita tidak akan berjogging.<br>";
}


$kondisi_matahari = "tidak terik";

if ($kondisi_matahari == "terik") {
    echo "Kita tidak berjogging.<br>";
} elseif ($kondisi_matahari == "tidak terik") {
    echo "Kita akan berjogging.<br>";
} else {
    echo "Kondisi matahari tidak diketahui.<br>";
}


$pemanasan = true;
$sehat = true;

if ($pemanasan) {
    if ($sehat) {
        echo "Jogging kita lancar dan kita sehat.<br>";
    } else {
        echo "Jogging lancar tapi kondisi tubuh tidak sehat.<br>";
    }
} else {
    echo "Tanpa pemanasan, kita berisiko cedera.<br>";
}


$jogging = true;
$jaga_makan = true;

if ($jogging && $jaga_makan) {
    echo "Kita mendapatkan tubuh yang lebih sehat.<br>";
} else {
    echo "Tubuh kurang sehat karena tidak seimbang.<br>";
}


$pemanasan = false;
$teknik_benar = false;

if (!$pemanasan || !$teknik_benar) {
    echo "Otot kita akan cedera.<br>";
} else {
    echo "Jogging aman tanpa cedera.<br>";
}


$cedera = true;

if ($cedera) {
    echo "Kita akan dirawat medis.<br>";
    echo "Kita akan mengeluarkan biaya.<br>";
}


$pendinginan = true;

if ($pendinginan) {
    echo "Otot tubuh lebih rileks.<br>";
} else {
    echo "Otot tubuh menjadi tegang.<br>";
}

?>
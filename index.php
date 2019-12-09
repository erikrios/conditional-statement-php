<?php

// The example of if statement
$nama = "Erik Rio Setiawan";
if ($nama == "Erik Rio Setiawan") {
    echo "Nama saya adalah $nama <br>";
}

// The example of if else statement
$usia = 22;
if ($usia < 15) {
    echo "Saya merupakan anak-anak karena berusia $usia tahun<br>";
} else {
    echo "Saya merupakan orang dewasa karena berusia $usia tahun<br>";
}

// The example of if else if statement
$nilai = 98;
if ($nilai <= 100 && $nilai > 90) {
    echo "Anda mendapat grade A, karena memperoleh nilai $nilai <br>";
} else if ($nilai <= 90 && $nilai > 80) {
    echo "Anda mendapat grade B, karena memperoleh nilai $nilai <br>";
} else if ($nilai <= 80 && $nilai > 70) {
    echo "Anda mendapat grade C, karena memperoleh nilai $nilai <br>";
} else if ($nilai <= 70 && $nilai > 50) {
    echo "Anda mendapat grade D, karena memperoleh nilai $nilai <br>";
} else {
    echo "Anda mendapat grade E, karena memperoleh nilai $nilai <br>";
}

// The example of ternary operator
$kondisi;
(15 < 19)? $kondisi = "Benar" : $kondisi = "Salah";
print $kondisi;

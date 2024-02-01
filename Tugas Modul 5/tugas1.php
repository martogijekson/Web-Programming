<?php
$jumlahUang = 1575250;

// Hitung jumlah pecahan Rp. 100.000
$a = floor($jumlahUang / 100000);
$jumlahUang %= 100000;

// Hitung jumlah pecahan Rp. 50.000
$b = floor($jumlahUang / 50000);
$jumlahUang %= 50000;

// Hitung jumlah pecahan Rp. 20.000
$c = floor($jumlahUang / 20000);
$jumlahUang %= 20000;

// Hitung jumlah pecahan Rp. 5.000
$d = floor($jumlahUang / 5000);
$jumlahUang %= 5000;

// Hitung jumlah pecahan Rp. 100
$e = floor($jumlahUang / 100);
$jumlahUang %= 100;

// Hitung jumlah pecahan Rp. 50
$f = floor($jumlahUang / 50);

echo "Jumlah Rp. 100.000 : ".$a. "<br />";
echo "Jumlah Rp. 50.000 : ".$b. "<br />";
echo "Jumlah Rp. 20.000 : ".$c. "<br />";
echo "Jumlah Rp. 5.000 : ".$d. "<br />";
echo "Jumlah Rp. 100 : ".$e. "<br />";
echo "Jumlah Rp. 50 : ".$f. "<br />";
?>
<?php
// Array dengan bilangan-bilangan yang diberikan
$bilangan = array(283, 182, 381, 119, 391, 591, 123, 124, 284, 215, 312);

// Mencari bilangan terbesar
$terbesar = max($bilangan);

// Mencari bilangan terkecil
$terkecil = min($bilangan);

// Menghitung rata-rata
$rata_rata = array_sum($bilangan) / count($bilangan);

// Menampilkan hasil
echo"Data Bilangan: 283, 182, 381, 119, 391, 591, 123, 124, 284, 215, 312<br>";
echo "Bilangan Terbesar: $terbesar<br>";
echo "Bilangan Terkecil: $terkecil<br>";
echo "Rata-rata: $rata_rata";
?>
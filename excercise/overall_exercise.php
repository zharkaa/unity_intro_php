<?php
$angka1 = 10;
$angka2 = 5;

if ($angka1 > $angka2) {
    echo "Angka 1 lebih besar dari Angka 2 <br>";
} elseif ($angka1 < $angka2) {
    echo "Angka 1 lebih kecil dari Angka 2 <br>";
} else {
    echo "Angka 1 sama dengan Angka 2 <br>";
}

$penjumlahan = $angka1 + $angka2;
$pengurangan = $angka1 - $angka2;
$perkalian = $angka1 * $angka2;
$pembagian = $angka1 / $angka2;

echo "Penjumlahan: " . $penjumlahan . "<br>";
echo "Pengurangan: " . $pengurangan . "<br>";
echo "Perkalian: " . $perkalian . "<br>";
echo "Pembagian: " . $pembagian . "<br>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}


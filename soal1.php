<?php
function buatDeretA000124($n) {
    $hasil = [];
    for ($i = 0; $i < $n; $i++) {
        $angka = ($i * ($i + 1)) / 2 + 1;
        $hasil[] = $angka;
    }
    return implode("-", $hasil);
}

echo "Masukkan jumlah angka (n): ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
$n = intval(trim($line));
fclose($handle);

echo buatDeretA000124($n) . "\n";

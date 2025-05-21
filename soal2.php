<?php
function denseRanking($scores, $gitsScores) {
    $uniqueScores = array_values(array_unique($scores));
    rsort($uniqueScores);

    $hasil = [];
    foreach ($gitsScores as $score) {
        $rank = 1;
        $index = 0;
        while ($index < count($uniqueScores) && $score < $uniqueScores[$index]) {
            $rank++;
            $index++;
        }
        $hasil[] = $rank;
    }
    return $hasil;
}

$handle = fopen("php://stdin","r");

echo "Masukkan jumlah pemain: ";
$line = fgets($handle);
$jumlahPemain = intval(trim($line));

echo "Masukkan skor pemain (dipisah spasi): ";
$line = fgets($handle);
$skorPemain = array_map('intval', explode(' ', trim($line)));

echo "Masukkan jumlah skor GITS: ";
$line = fgets($handle);
$jumlahGits = intval(trim($line));

echo "Masukkan skor GITS (dipisah spasi): ";
$line = fgets($handle);
$skorGits = array_map('intval', explode(' ', trim($line)));

fclose($handle);

$hasil = denseRanking($skorPemain, $skorGits);
echo implode(" ", $hasil) . "\n";

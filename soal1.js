const readline = require("readline");

function soalsatu(jumlah) {
  let hasil = [];

  for (let i = 0; i < jumlah; i++) {
    let angka = (i * (i + 1)) / 2 + 1;
    hasil.push(angka);
  }

  return hasil.join("-");
}

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout,
});

rl.question("Masukkan jumlah angka yang ingin ditampilkan: ", function (input) {
  const jumlahAngka = parseInt(input);

  if (!isNaN(jumlahAngka) && jumlahAngka > 0) {
    const deret = soalsatu(jumlahAngka);
    console.log("Hasil deret A000124:", deret);
  } else {
    console.log("Input tidak valid! Harus berupa angka bulat positif.");
  }
  rl.close();
});

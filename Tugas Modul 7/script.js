function konversiNilai() {
  const nilaiAngka = parseInt(document.getElementById("nilaiAngka").value);
  let nilaiHuruf;

  if (nilaiAngka >= 0 && nilaiAngka <= 40) {
    nilaiHuruf = "E";
  } else if (nilaiAngka <= 55) {
    nilaiHuruf = "D";
  } else if (nilaiAngka <= 60) {
    nilaiHuruf = "C";
  } else if (nilaiAngka <= 65) {
    nilaiHuruf = "BC";
  } else if (nilaiAngka <= 70) {
    nilaiHuruf = "B";
  } else if (nilaiAngka <= 80) {
    nilaiHuruf = "AB";
  } else if (nilaiAngka <= 100) {
    nilaiHuruf = "A";
  } else {
    nilaiHuruf = "Nilai tidak valid";
  }

  document.getElementById("hasil").innerText = `Nilai huruf: ${nilaiHuruf}`;
}

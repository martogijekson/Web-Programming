function hitung(operator) {
  var bil1 = parseFloat(document.getElementById("bil1").value);
  var bil2 = parseFloat(document.getElementById("bil2").value);
  var hasil = 0;

  if (operator === "+") {
    hasil = bil1 + bil2;
  } else if (operator === "-") {
    hasil = bil1 - bil2;
  } else if (operator === "x") {
    hasil = bil1 * bil2;
  } else if (operator === "/") {
    if (bil2 !== 0) {
      hasil = bil1 / bil2;
    } else {
      alert("Pembagian dengan nol tidak diizinkan");
      return;
    }
  }

  document.getElementById("hasil").value = hasil;
}

function clearFields() {
  document.getElementById("bil1").value = "";
  document.getElementById("bil2").value = "";
  document.getElementById("hasil").value = "";
}

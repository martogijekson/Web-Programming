<?php
require('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $komentar = $_POST['komentar'];

    $query = "INSERT INTO guestbook (Nama, Email, Website, Tanggal, Komentar)
              VALUES ('$nama', '$email', '$website', NOW(), '$komentar')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<?php
require('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM guestbook WHERE Id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

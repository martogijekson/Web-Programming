<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
            h1,h2 {text-align: center;}
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Buku Tamu</h1>

        <!-- Form untuk menambahkan komentar -->
        <form action="process.php" method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="website">Website:</label>
                <input type="text" class="form-control" name="website" id="website">
            </div>
            <div class="form-group">
                <label for="komentar">Komentar:</label>
                <textarea class="form-control" name="komentar" id="komentar"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan Komentar</button>
        </form>

        <h2 class="mt-4">Data Buku Tamu</h2>

        <?php
        require('config.php');
        $items_per_page = 3;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * $items_per_page;

        $query = "SELECT * FROM guestbook ORDER BY Tanggal DESC LIMIT $start, $items_per_page";
        $result = mysqli_query($conn, $query);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card mt-2">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['Nama'] . '</h5>';
            echo '<p class="card-text">' . $row['Email'] . '</p>';
            echo '<p class="card-text">' . $row['Website'] . '</p>';
            echo '<p class="card-text">' . $row['Komentar'] . '</p>';
            echo '<p class="card-text">' . 'Tanggal: ' . $row['Tanggal'] . '</p>';
            echo '<a href="delete.php?id=' . $row['Id'] . '" class="btn btn-danger">Hapus</a>';
            echo '</div>';
            echo '</div>';
        }

        $total_items = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM guestbook"));
        $total_pages = ceil($total_items / $items_per_page);

        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<a class="btn btn-secondary m-2" href="index.php?page=' . $i . '">' . $i . '</a>';
        }
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        .hasil {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .label {
            width: 150px;
            display: inline-block;
            font-weight: bold;
        }

        .nilai {
            display: inline-block;
        }
    </style>
</head>
<body>
    <h2>Terima kasih <?php echo $_POST['nama']; ?> sudah mengisi form pendaftaran.</h2>
    <div class="hasil">
        <p><span class="label">Nama Lengkap </span> : <span class="nilai"><?php echo $_POST['nama']; ?></span></p>
        <p><span class="label">Tempat Lahir </span> : <span class="nilai"><?php echo $_POST['tempat_lahir']; ?></span></p>
        <p><span class="label">Tanggal Lahir </span> : <span class="nilai"><?php echo $_POST['tanggal_lahir']; ?></span></p>
        <p><span class="label">Alamat Rumah </span> : <span class="nilai"><?php echo $_POST['alamat']; ?></span></p>
        <p><span class="label">Jenis Kelamin </span> : <span class="nilai"><?php echo $_POST['jenis_kelamin']; ?></span></p>
        <p><span class="label">Asal Sekolah </span> : <span class="nilai"><?php echo $_POST['asal_sekolah']; ?></span></p>
        <p><span class="label">Nilai UAN </span> : <span class="nilai"><?php echo $_POST['nilai_uan']; ?></span></p>
    </div>
</body>
</html>

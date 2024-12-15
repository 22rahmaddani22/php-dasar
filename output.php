<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form yang dikirim dengan metode POST
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $jekel = htmlspecialchars($_POST['jekel']);
    $ipk = htmlspecialchars($_POST['ipk']);
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Beasiswa - Hasil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
        }

        .result-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        p {
            font-size: 16px;
            color: #333;
        }

        .label {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="result-container">
        <h2>Hasil Penerimaan Beasiswa</h2>
        <p><span class="label">Nama: </span><?php echo $nama; ?></p>
        <p><span class="label">NIM: </span><?php echo $nim; ?></p>
        <p><span class="label">Kelas: </span><?php echo $kelas; ?></p>
        <p><span class="label">Jurusan: </span><?php echo $jurusan; ?></p>
        <p><span class="label">Jenis Kelamin: </span><?php echo $jekel; ?></p>
        <p><span class="label">IPK: </span><?php echo $ipk; ?></p>
    </div>
</body>

</html>
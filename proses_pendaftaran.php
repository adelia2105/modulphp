<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proses Pendaftaran</title>
</head>
<body>
    <h2>Data Pendaftaran</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST["nama"]);
        $nim = htmlspecialchars($_POST["nim"]);
        $email = htmlspecialchars($_POST["email"]);
        $tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
        $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
        $alamat = htmlspecialchars($_POST["alamat"]);
        $gender = htmlspecialchars($_POST["gender"]);
        
        echo "Selamat datang <b>$nama</b><br>";
        echo "NIM: $nim<br>";
        echo "Email: $email<br>";
        echo "Tempat, tanggal Lahir: $tempat_lahir, $tanggal_lahir<br>";
        echo "Alamat: $alamat<br>";
        echo "Jenis Kelamin: $gender<br>";
    } else {
        echo "Tidak ada data yang diterima.";
    }
    ?>
</body>
</html>

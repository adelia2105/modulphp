<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama : <input type="text" name="nama"><br>
        E-mail: <input type="email" name="email"><br>
        Komentar : <textarea name="komentar" rows="5" cols="40"></textarea><br>
        <input type="submit" value="simpan">
        <input type="reset" value="bersihkan">
    </form>


    <?php
    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = bersihkan_input($_POST["nama"]);
        $email = bersihkan_input($_POST["email"]);
        $comment = bersihkan_input($_POST["komentar"]);
        echo("<hr>");
        echo("<h2>Hasil Catatan:</h2>");
        echo("Nama: " . $name . "<br>");
        echo("Email: " . $email . "<br>");
        echo("Komentar: " . $comment . "<br>");
        echo("<hr>");
    }
    ?>
</body>
</html>

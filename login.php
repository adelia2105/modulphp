<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php 
    $username = $password = ""; 
    $usernameErr = $passwordErr = "";

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["u"])) {
            $usernameErr = "Masukkan username";
        } else {
            $username = bersihkan_input($_POST["u"]);
        }
        if (empty($_POST["p"])) {
            $passwordErr = "Masukkan password";
        } else {
            $password = bersihkan_input($_POST["p"]);
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Username: <input type="text" name="u">
        <span class="error">* <?php echo $usernameErr;?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error">* <?php echo $passwordErr;?></span>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>

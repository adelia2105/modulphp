<?php
session_start();


$correct_username = "admin";
$correct_password = "password123";

// Fungsi untuk menampilkan form login
function display_login_form($error_message = "") {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login</h2>';
    if ($error_message != "") {
        echo '<p style="color:red;">' . htmlspecialchars($error_message) . '</p>';
    }
    echo '<form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </body>
    </html>';
}

// Fungsi untuk menampilkan halaman selamat datang
function display_welcome_page() {
    echo '<!DOCTYPE html>
    <html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <h2>Welcome, ' . htmlspecialchars($_SESSION['username']) . '!</h2>
        <p>Anda berhasil login.</p>
        <form action="" method="post">
            <input type="submit" name="logout" value="Logout">
        </form>
    </body>
    </html>';
}

// Memproses logout
if (isset($_POST['logout'])) {
    session_destroy();
    header("location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Memproses login
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['logout'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {
        // Jika login berhasil, set session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect ke halaman welcome
        header("location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        // Jika login gagal, tampilkan pesan error
        display_login_form("Username atau password salah.");
        exit;
    }
}

// Menampilkan halaman sesuai dengan status login
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    display_welcome_page();
} else {
    display_login_form();
}
?>

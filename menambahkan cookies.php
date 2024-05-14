<?php
// Data identitas
$identitas = [
    "nama" => "Agnes Adelia Putri",
    "ttl" => "Trenggalek, 21 Mei 2004",
    "nim" => "233307031",
    "kelas" => "B",
    "prodi" => "Teknik Informasi",
    "jurusan" => "teknik",
];

// Mengatur waktu kedaluwarsa cookie (misalnya, 30 hari dari sekarang)
$expire = time() + (30 * 24 * 60 * 60);

// Menyimpan data identitas dalam cookie
foreach ($identitas as $key => $value) {
    setcookie($key, $value, $expire, "/");
}

// Memeriksa apakah semua cookie sudah ada
$allCookiesSet = true;
foreach ($identitas as $key => $value) {
    if (!isset($_COOKIE[$key])) {
        $allCookiesSet = false;
        break;
    }
}

// Menampilkan data identitas dari cookie jika semua cookie sudah ada
if ($allCookiesSet) {
    echo "Data identitas:<br>";
    echo "Nama: " . htmlspecialchars($_COOKIE['nama']) . "<br>";
    echo "Tempat Tanggal Lahir: " . htmlspecialchars($_COOKIE['ttl']) . "<br>";
    echo "NIM: " . htmlspecialchars($_COOKIE['nim']) . "<br>";
    echo "Kelas: " . htmlspecialchars($_COOKIE['kelas']) . "<br>";
    echo "Prodi: " . htmlspecialchars($_COOKIE['prodi']) . "<br>";
    echo "Jurusan: " . htmlspecialchars($_COOKIE['jurusan']) . "<br>";
    
} else {
    echo "Data identitas telah disimpan dalam cookie. Silakan refresh halaman ini.";
}
?>

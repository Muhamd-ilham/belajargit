<?php
// koneksi.php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

// --- KONFIGURASI DATABASE ---
$host = "127.0.0.1";  // Ganti 'localhost' jadi IP ini biar lebih stabil di port khusus
$port = 3307;         // <--- INI KUNCINYA (Sesuai screenshot Abang)
$user = "root";       // User default (Sesuai screenshot: root)
$pass = "";           // Password kosong (Sesuai screenshot: Tidak ada sandi)
$db   = "wedding_db"; // Nama database

// Buat koneksi dengan parameter Port (Parameter ke-5)
$conn = new mysqli($host, $user, $pass, $db, $port);

// Cek error
if ($conn->connect_error) {
    // Tampilkan pesan error JSON biar kelihatan di console browser
    die(json_encode([
        "status" => "error", 
        "message" => "Koneksi Gagal: " . $conn->connect_error
    ]));
}
?>
<?php
session_start();
include 'koneksi.php'; // Koneksi sudah di satu folder, langsung panggil

// Paksa HTML
header("Content-Type: text/html");

if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

$error = "";

if (isset($_POST['login'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // 1. Cek Username di tabel clients
    $query = $conn->query("SELECT * FROM clients WHERE username = '$username'");
    
    if ($query->num_rows === 1) {
        $data = $query->fetch_assoc();
        
        // 2. Verifikasi Password (Hash)
        if (password_verify($password, $data['password'])) {
            
            // 3. SIMPAN ID KLIEN (Ini Kuncinya!)
           $_SESSION['login'] = true;
$_SESSION['client_id'] = $data['id'];
$_SESSION['user'] = $data['username'];
$_SESSION['slug'] = $data['slug'];

// --- TAMBAHAN KHUSUS OWNER ---
if ($data['username'] === 'owner') {
    header("Location: admin/index.php"); // Lempar ke Markas Besar
    exit;
}
// -----------------------------

header("Location: dashboard.php"); // Kalau user biasa, ke sini
exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .card-login { width: 100%; max-width: 400px; border-radius: 15px; border: none; }
    </style>
</head>
<body>
<div class="card card-login shadow p-4">
    <h3 class="text-center fw-bold mb-4">Member Login</h3>
    <?php if($error): ?>
        <div class="alert alert-danger py-2 text-center" role="alert"><?= $error ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required autofocus autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100 py-2">Masuk</button>
    </form>
    <div class="text-center mt-3">
        <small class="text-muted">Platform Undangan Digital</small>
    </div>
</div>
</body>
</html>
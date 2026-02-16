<?php
session_start();
include '../koneksi.php';

// --- TAMBAHKAN BARIS INI BIAR TAMPILANNYA MUNCUL ---
header("Content-Type: text/html");
// ---------------------------------------------------

// ... (lanjut ke kode pengecekan owner di bawahnya)
if (!isset($_SESSION['login']) || $_SESSION['user'] !== 'owner') {
    die("<h3>Akses Ditolak!</h3><p>Hanya Owner yang boleh masuk sini. <a href='../login.php'>Login</a></p>");
}

// 2. LOGIC: TAMBAH / EDIT KLIEN
$msg = "";
if (isset($_POST['simpan_data'])) {
    $slug = $_POST['slug'];
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi Password
    $pria = $_POST['nama_pria'];
    $wanita = $_POST['nama_wanita'];
    $tgl = $_POST['tgl_acara'];
    $tema = $_POST['theme'];

    // Cek apakah slug sudah ada?
    $cek = $conn->query("SELECT * FROM clients WHERE slug='$slug'");
    if ($cek->num_rows > 0) {
        $msg = "<div class='alert alert-danger'>Gagal! Link Undangan (Slug) '$slug' sudah dipakai.</div>";
    } else {
        // Simpan ke Database
        $sql = "INSERT INTO clients (slug, username, password, nama_pria, nama_wanita, tgl_acara, theme) 
                VALUES ('$slug', '$user', '$pass', '$pria', '$wanita', '$tgl', '$tema')";
        
        if ($conn->query($sql)) {
            // Buat Folder Upload Otomatis
            $path = "../assets/uploads/" . $slug;
            if (!file_exists($path)) { mkdir($path, 0777, true); }
            
            $msg = "<div class='alert alert-success'>Sukses! Klien baru berhasil dibuat. Folder upload siap.</div>";
        } else {
            $msg = "<div class='alert alert-danger'>Error SQL: " . $conn->error . "</div>";
        }
    }
}

// 3. LOGIC: HAPUS KLIEN
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $conn->query("DELETE FROM clients WHERE id='$id'");
    $conn->query("DELETE FROM ucapan WHERE client_id='$id'");
    $conn->query("DELETE FROM tamu WHERE client_id='$id'");
    header("Location: index.php"); // Refresh
}

// 4. AMBIL SEMUA DATA KLIEN
$klien_all = $conn->query("SELECT * FROM clients WHERE username != 'owner' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Owner Dashboard - Super Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <span class="navbar-brand mb-0 h1">👑 Owner Panel</span>
        <a href="../logout.php" class="btn btn-sm btn-outline-light">Logout</a>
    </div>
</nav>

<div class="container">
    <?= $msg ?>

    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i class="fa-solid fa-plus"></i> Tambah Klien Baru
    </button>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Link (Slug)</th>
                            <th>Mempelai</th>
                            <th>Tanggal</th>
                            <th>Login Client</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $klien_all->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <a href="../?u=<?= $row['slug'] ?>" target="_blank" class="fw-bold text-decoration-none">
                                    <?= $row['slug'] ?> <i class="fa-solid fa-arrow-up-right-from-square small"></i>
                                </a>
                            </td>
                            <td><?= $row['nama_pria'] ?> & <?= $row['nama_wanita'] ?></td>
                            <td><?= $row['tgl_acara'] ?></td>
                            <td>
                                <small class="d-block text-muted">User: <b><?= $row['username'] ?></b></small>
                                </td>
                            <td>
                                <a href="edit_klien.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">
                                    <i class="fa-solid fa-pen-to-square"></i> Kelola Data
                                </a>
                                <a href="index.php?hapus=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus klien ini? Data tamu & ucapan juga akan hilang permanen.')">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buat Undangan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Link Undangan (Slug)</label>
                        <input type="text" name="slug" class="form-control" placeholder="contoh: romeo-juliet" required>
                        <small class="text-muted">Tanpa spasi, gunakan tanda strip (-)</small>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label>Nama Pria</label>
                            <input type="text" name="nama_pria" class="form-control" required>
                        </div>
                        <div class="col-6 mb-3">
                            <label>Nama Wanita</label>
                            <input type="text" name="nama_wanita" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label>Tanggal Acara</label>
                        <input type="date" name="tgl_acara" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Pilih Tema</label>
                        <select name="theme" class="form-select">
                            <option value="basic">Basic (Default)</option>
                            </select>
                    </div>
                    <hr>
                    <h6>Buat Akun Login Klien</h6>
                    <div class="mb-3">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="utk login klien" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control" placeholder="utk login klien" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="simpan_data" class="btn btn-primary">Simpan & Buat</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
session_start();
include '../koneksi.php';
header("Content-Type: text/html");

// 1. CEK AKSES OWNER
if (!isset($_SESSION['login']) || $_SESSION['user'] !== 'owner') {
    die("<h3>Akses Ditolak!</h3><p>Hanya Owner yang boleh masuk sini.</p>");
}

$id = $_GET['id'];

// 2. LOGIC SIMPAN DATA UTAMA (TEKS & QRIS & COVER)
$msg = "";
if (isset($_POST['update_data'])) {
    
    // Ambil Data dari Form
    $pria   = $_POST['nama_pria'];
    $wanita = $_POST['nama_wanita'];
    $tgl    = $_POST['tgl_acara'];
    $ayah_p = $_POST['nama_ayah_pria'];
    $ibu_p  = $_POST['nama_ibu_pria'];
    $ayah_w = $_POST['nama_ayah_wanita'];
    $ibu_w  = $_POST['nama_ibu_wanita'];
    $maps   = $_POST['link_maps'];
    $alamat = isset($_POST['alamat_lengkap']) ? $_POST['alamat_lengkap'] : '';
    $rek    = $_POST['no_rekening'];
    $music  = $_POST['music'];
    $ac1_nama = $_POST['acara1_nama'];
    $ac1_jam  = $_POST['acara1_waktu'];
    $ac2_nama = $_POST['acara2_nama'];
    $ac2_jam  = $_POST['acara2_waktu'];
    $bank_nama  = $_POST['bank_nama'];
    $bank_an    = $_POST['bank_an'];
    $gift_nohp  = $_POST['gift_nohp'];
    $gift_alamat= $_POST['gift_alamat'];
    
    // Update Data Teks
    $sql = "UPDATE clients SET 
            nama_pria='$pria', nama_wanita='$wanita', tgl_acara='$tgl',
            nama_ayah_pria='$ayah_p', nama_ibu_pria='$ibu_p',
            nama_ayah_wanita='$ayah_w', nama_ibu_wanita='$ibu_w',
            link_maps='$maps', alamat_lengkap='$alamat', no_rekening='$rek', 
            music='$music',
            acara1_nama='$ac1_nama', acara1_waktu='$ac1_jam',
            acara2_nama='$ac2_nama', acara2_waktu='$ac2_jam',
            bank_nama='$bank_nama', bank_an='$bank_an',
            gift_nohp='$gift_nohp', gift_alamat='$gift_alamat'
            WHERE id='$id'";
            
    if ($conn->query($sql)) {
        $msg .= "<div class='alert alert-success'>Data utama berhasil disimpan!</div>";
    } else {
        $msg .= "<div class='alert alert-danger'>Error SQL: " . $conn->error . "</div>";
    }

    // --- LOGIC UPLOAD FOTO SATUAN (Termasuk QRIS) ---
    $slug_folder = $_POST['slug_hidden'];
    $targetDir = "../assets/uploads/" . $slug_folder . "/";
    if (!file_exists($targetDir)) { mkdir($targetDir, 0777, true); }

    function prosesUpload($inputName, $dbColumn, $dir, $con, $id_client) {
        if (!empty($_FILES[$inputName]['name'])) {
            $fileName = time() . '_' . $inputName . '_' . basename($_FILES[$inputName]['name']);
            if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $dir . $fileName)) {
                $con->query("UPDATE clients SET $dbColumn='$fileName' WHERE id='$id_client'");
                return true;
            }
        }
        return false;
    }

    // Upload Cover, Pria, Wanita
    if(prosesUpload('foto_cover', 'foto_cover', $targetDir, $conn, $id)) $msg .= "<div class='alert alert-info'>Foto Cover terupload.</div>";
    if(prosesUpload('foto_pria', 'foto_pria', $targetDir, $conn, $id)) $msg .= "<div class='alert alert-info'>Foto Pria terupload.</div>";
    if(prosesUpload('foto_wanita', 'foto_wanita', $targetDir, $conn, $id)) $msg .= "<div class='alert alert-info'>Foto Wanita terupload.</div>";
    
    // Upload QRIS (Ini yang sebelumnya kurang Bang)
    if(prosesUpload('foto_qris', 'foto_qris', $targetDir, $conn, $id)) $msg .= "<div class='alert alert-info'>QRIS berhasil diupload.</div>";
}

// --- LOGIC TAMBAH CERITA ---
if (isset($_POST['add_story'])) {
    $judul_cerita = $_POST['judul_story'];
    $isi_cerita   = $_POST['isi_story'];
    
    $gambar_story = "default.jpg";
    if (!empty($_FILES['foto_story']['name'])) {
        $slug_folder = $_POST['slug_hidden'];
        $targetDir = "../assets/uploads/" . $slug_folder . "/";
        $fileName = time() . '_story_' . basename($_FILES['foto_story']['name']);
        if (move_uploaded_file($_FILES['foto_story']['tmp_name'], $targetDir . $fileName)) {
            $gambar_story = $fileName;
        }
    }

    $conn->query("INSERT INTO love_stories (client_id, judul, cerita, gambar) VALUES ('$id', '$judul_cerita', '$isi_cerita', '$gambar_story')");
    $msg .= "<div class='alert alert-success'>Cerita berhasil ditambahkan!</div>";
}

if (isset($_GET['del_story'])) {
    $id_story = $_GET['del_story'];
    $conn->query("DELETE FROM love_stories WHERE id='$id_story'");
    echo "<script>window.location='edit_klien.php?id=$id';</script>";
}

// --- LOGIC UPLOAD GALERI (MULTI) ---
if (isset($_POST['upload_gallery'])) {
    $slug_folder = $_POST['slug_hidden'];
    $targetDir = "../assets/uploads/" . $slug_folder . "/";
    
    $count = count($_FILES['foto_gallery']['name']);
    for ($i = 0; $i < $count; $i++) {
        if (!empty($_FILES['foto_gallery']['name'][$i])) {
            $fileName = time() . '_galeri_' . $i . '_' . basename($_FILES['foto_gallery']['name'][$i]);
            if (move_uploaded_file($_FILES['foto_gallery']['tmp_name'][$i], $targetDir . $fileName)) {
                $conn->query("INSERT INTO client_gallery (client_id, gambar) VALUES ('$id', '$fileName')");
            }
        }
    }
    $msg .= "<div class='alert alert-success'>Foto Galeri berhasil diupload!</div>";
}

if (isset($_GET['del_gallery'])) {
    $id_gal = $_GET['del_gallery'];
    $q_del = $conn->query("SELECT gambar FROM client_gallery WHERE id='$id_gal'")->fetch_assoc();
    $file_path = "../assets/uploads/" . $data['slug'] . "/" . $q_del['gambar'];
    if (file_exists($file_path)) { unlink($file_path); }
    $conn->query("DELETE FROM client_gallery WHERE id='$id_gal'");
    echo "<script>window.location='edit_klien.php?id=$id';</script>";
}

// 3. AMBIL DATA TERBARU
$query = $conn->query("SELECT * FROM clients WHERE id='$id'");
$data = $query->fetch_assoc();
if(!$data) die("Data klien tidak ditemukan.");

// Helper Variables
$f_cover  = $data['foto_cover'] ? "../assets/uploads/".$data['slug']."/".$data['foto_cover'] : "";
$f_pria   = $data['foto_pria'] ? "../assets/uploads/".$data['slug']."/".$data['foto_pria'] : "";
$f_wanita = $data['foto_wanita'] ? "../assets/uploads/".$data['slug']."/".$data['foto_wanita'] : "";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data: <?= $data['slug'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-light pb-5">

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>✏️ Edit Data: <?= $data['slug'] ?></h3>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </div>

    <?= $msg ?>

    <form method="POST" enctype="multipart/form-data">
        <input type="hidden" name="slug_hidden" value="<?= $data['slug'] ?>">
        
        <div class="row">
            <div class="col-md-8">
                
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-header fw-bold">Data Mempelai</div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-6"><label>Nama Pria</label><input type="text" name="nama_pria" class="form-control" value="<?= $data['nama_pria'] ?>"></div>
                            <div class="col-6"><label>Nama Wanita</label><input type="text" name="nama_wanita" class="form-control" value="<?= $data['nama_wanita'] ?>"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6"><label>Ayah Pria</label><input type="text" name="nama_ayah_pria" class="form-control" value="<?= $data['nama_ayah_pria'] ?>"></div>
                            <div class="col-6"><label>Ibu Pria</label><input type="text" name="nama_ibu_pria" class="form-control" value="<?= $data['nama_ibu_pria'] ?>"></div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6"><label>Ayah Wanita</label><input type="text" name="nama_ayah_wanita" class="form-control" value="<?= $data['nama_ayah_wanita'] ?>"></div>
                            <div class="col-6"><label>Ibu Wanita</label><input type="text" name="nama_ibu_wanita" class="form-control" value="<?= $data['nama_ibu_wanita'] ?>"></div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-header fw-bold">Data Acara</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12"><h6 class="fw-bold text-success"><i class="fa-solid fa-calendar-day"></i> Rangkaian Acara</h6></div>
                            <div class="col-6">
                                <label class="small fw-bold">Nama Acara 1</label>
                                <input type="text" name="acara1_nama" class="form-control mb-2" value="<?= $data['acara1_nama'] ?>" placeholder="Contoh: Akad Nikah">
                            </div>
                            <div class="col-6">
                                <label class="small fw-bold">Jam Acara 1</label>
                                <input type="text" name="acara1_waktu" class="form-control mb-2" value="<?= $data['acara1_waktu'] ?>" placeholder="08.00 - Selesai">
                            </div>

                            <div class="col-6">
                                <label class="small fw-bold">Nama Acara 2</label>
                                <input type="text" name="acara2_nama" class="form-control" value="<?= $data['acara2_nama'] ?>" placeholder="Contoh: Resepsi">
                            </div>
                            <div class="col-6">
                                <label class="small fw-bold">Jam Acara 2</label>
                                <input type="text" name="acara2_waktu" class="form-control" value="<?= $data['acara2_waktu'] ?>" placeholder="11.00 - Selesai">
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3"><label>Tanggal</label><input type="date" name="tgl_acara" class="form-control" value="<?= $data['tgl_acara'] ?>"></div>
                        <div class="mb-3"><label>Link Maps</label><input type="text" name="link_maps" class="form-control" value="<?= $data['link_maps'] ?>"></div>
                        <div class="mb-3"><label>Alamat Lengkap</label><textarea name="alamat_lengkap" class="form-control"><?= $data['alamat_lengkap'] ?></textarea></div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 mb-3 mt-3">
                    <div class="card-header fw-bold text-danger"><i class="fa-solid fa-gift"></i> Data Love Gift (Amplop)</div>
                    <div class="card-body">
                        
                        <h6 class="fw-bold small">1. Transfer Bank</h6>
                        <div class="row mb-2">
                            <div class="col-6">
                                <input type="text" name="bank_nama" class="form-control form-control-sm mb-1" value="<?= $data['bank_nama'] ?>" placeholder="Nama Bank (BCA)">
                            </div>
                            <div class="col-6">
                                <input type="text" name="no_rekening" class="form-control form-control-sm mb-1" value="<?= $data['no_rekening'] ?>" placeholder="Nomor Rekening">
                            </div>
                            <div class="col-12">
                                <input type="text" name="bank_an" class="form-control form-control-sm" value="<?= $data['bank_an'] ?>" placeholder="Atas Nama (a.n)">
                            </div>
                        </div>

                        <hr>

                        <h6 class="fw-bold small">2. QRIS (Scan Barcode)</h6>
                        <div class="mb-2">
                            <?php if($data['foto_qris']): ?>
                                <img src="../assets/uploads/<?= $data['slug'] ?>/<?= $data['foto_qris'] ?>" style="height:80px" class="mb-2 border rounded">
                            <?php endif; ?>
                            <input type="file" name="foto_qris" class="form-control form-control-sm">
                            <small class="text-muted">*Upload jika ingin ganti barcode</small>
                        </div>

                        <hr>

                        <h6 class="fw-bold small">3. Kirim Kado Fisik</h6>
                        <div class="mb-2">
                            <input type="text" name="gift_nohp" class="form-control form-control-sm mb-1" value="<?= $data['gift_nohp'] ?>" placeholder="No HP Penerima">
                            <textarea name="gift_alamat" class="form-control form-control-sm" placeholder="Alamat Lengkap Penerima"><?= $data['gift_alamat'] ?></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="fw-bold text-primary">🎵 Link Musik (Direct MP3)</label>
                    <input type="text" name="music" class="form-control" value="<?= $data['music'] ?>" placeholder="Contoh: https://website.com/lagu.mp3">
                </div>

            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-header fw-bold">Upload Foto Mempelai</div>
                    <div class="card-body text-center">
                        <label class="d-block mb-2 fw-bold small">Foto Cover</label>
                        <?php if($f_cover): ?><img src="<?= $f_cover ?>" class="img-thumbnail mb-2" style="height:100px"><?php endif; ?>
                        <input type="file" name="foto_cover" class="form-control form-control-sm mb-3">

                        <hr>
                        <label class="d-block mb-2 fw-bold small">Foto Pria</label>
                        <?php if($f_pria): ?><img src="<?= $f_pria ?>" class="img-thumbnail mb-2" style="height:100px"><?php endif; ?>
                        <input type="file" name="foto_pria" class="form-control form-control-sm mb-3">

                        <hr>
                        <label class="d-block mb-2 fw-bold small">Foto Wanita</label>
                        <?php if($f_wanita): ?><img src="<?= $f_wanita ?>" class="img-thumbnail mb-2" style="height:100px"><?php endif; ?>
                        <input type="file" name="foto_wanita" class="form-control form-control-sm mb-3">
                    </div>
                </div>
                
                <button type="submit" name="update_data" class="btn btn-primary w-100 py-3 fw-bold">💾 SIMPAN PERUBAHAN</button>
            </div>
        </div>
    </form>
    <hr class="my-5 border-3">


    <div class="card shadow border-0 mb-5">
        <div class="card-header bg-warning text-dark fw-bold">Management Galeri Foto</div>
        <div class="card-body">
            
            <form method="POST" enctype="multipart/form-data" class="mb-4">
                <input type="hidden" name="slug_hidden" value="<?= $data['slug'] ?>">
                
                <label class="form-label fw-bold">Upload Foto (Bisa pilih banyak)</label>
                <div class="input-group">
                    <input type="file" name="foto_gallery[]" class="form-control" multiple required>
                    <button type="submit" name="upload_gallery" class="btn btn-primary">Upload Semua</button>
                </div>
                <small class="text-muted">Upload khusus galeri, tidak mengganggu data di atas.</small>
            </form>

            <div class="row g-3">
                <?php 
                $q_gal = $conn->query("SELECT * FROM client_gallery WHERE client_id='$id' ORDER BY id DESC");
                while($g = $q_gal->fetch_assoc()):
                ?>
                <div class="col-6 col-md-3 col-lg-2">
                    <div class="card h-100 shadow-sm">
                        <img src="../assets/uploads/<?= $data['slug'] ?>/<?= $g['gambar'] ?>" class="card-img-top" style="height: 100px; object-fit: cover;">
                        <div class="card-body p-1 text-center">
                            <a href="edit_klien.php?id=<?= $id ?>&del_gallery=<?= $g['id'] ?>" class="btn btn-danger btn-sm w-100" onclick="return confirm('Hapus foto ini?')">Hapus</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>

        </div>
    </div>


    <div class="card shadow border-0 mb-5">
        <div class="card-header bg-success text-white fw-bold">Management Love Story</div>
        <div class="card-body">
            
            <table class="table table-bordered mb-4">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Judul</th>
                        <th>Isi Cerita</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $q_story = $conn->query("SELECT * FROM love_stories WHERE client_id='$id' ORDER BY id ASC");
                    $no = 1;
                    while($row = $q_story->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <?php if($row['gambar'] != 'default.jpg'): ?>
                                <img src="../assets/uploads/<?= $data['slug'] ?>/<?= $row['gambar'] ?>" style="height:50px;">
                            <?php endif; ?>
                        </td>
                        <td><?= $row['judul'] ?></td>
                        <td><?= substr($row['cerita'], 0, 50) ?>...</td>
                        <td>
                            <a href="edit_klien.php?id=<?= $id ?>&del_story=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus cerita ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

            <hr>

            <h6 class="fw-bold">Tambah Cerita Baru</h6>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="slug_hidden" value="<?= $data['slug'] ?>">
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="judul_story" class="form-control" placeholder="Judul" required>
                    </div>
                    <div class="col-md-5">
                        <textarea name="isi_story" class="form-control" placeholder="Cerita..." required></textarea>
                    </div>
                    <div class="col-md-3">
                        <input type="file" name="foto_story" class="form-control" required>
                    </div>
                    <div class="col-md-1">
                        <button type="submit" name="add_story" class="btn btn-success w-100"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>

</body>
</html>
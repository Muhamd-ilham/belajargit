<?php
session_start();
include 'koneksi.php';

// --- [OBAT 1: PAKSA JADI HTML] ---
// Ini biar browser sadar kalau ini Website, bukan script mentah
header("Content-Type: text/html; charset=UTF-8"); 
// ---------------------------------

// 1. Ambil Parameter ?u=slug
$slug = isset($_GET['u']) ? $_GET['u'] : '';

// Kalau gak ada slug, lempar ke login
if(empty($slug)) {
    header("Location: login.php");
    exit;
}

// 2. Ambil Data Klien dari Database
$stmt = $conn->prepare("SELECT * FROM clients WHERE slug = ?");
$stmt->bind_param("s", $slug);
$stmt->execute();
$result = $stmt->get_result();
$klien = $result->fetch_assoc();

// Kalau data tidak ditemukan
if (!$klien) {
    echo "<h3>Undangan tidak ditemukan. Cek linknya lagi ya!</h3>";
    exit;
}

// 3. RACIK VARIABEL UNTUK TEMPLATE
// (Bagian ini yang kemarin bikin gambar error karena hilang)
$id_klien   = $klien['id'];
$pria       = $klien['nama_pria'];
$wanita     = $klien['nama_wanita'];
$tgl_acara  = $klien['tgl_acara'];
$tema       = $klien['theme'];
$conn->query("UPDATE clients SET views = views + 1 WHERE id='$id_klien'");
$folder_img = "assets/uploads/" . $klien['slug'] . "/";

// Cek satu-satu: Kalau di database ada fotonya, pakai itu. 
// Kalau kosong, pakai gambar default dari template.
$f_cover  = !empty($klien['foto_cover'])  ? $folder_img . $klien['foto_cover']  : "assets/images/bg.webp";
$f_pria   = !empty($klien['foto_pria'])   ? $folder_img . $klien['foto_pria']   : "assets/images/cowo.webp";
$f_wanita = !empty($klien['foto_wanita']) ? $folder_img . $klien['foto_wanita'] : "assets/images/cewe.webp";

// --- DEFINISI DATA ORTU & ALAMAT ---
// Pakai trik '??' biar gak muncul Warning kuning-kuning
$ayah_p = $klien['nama_ayah_pria'] ?? '-';
$ibu_p  = $klien['nama_ibu_pria'] ?? '-';
$ayah_w = $klien['nama_ayah_wanita'] ?? '-';
$ibu_w  = $klien['nama_ibu_wanita'] ?? '-';

$ortu_pria   = "Putra dari Bpk. $ayah_p & Ibu $ibu_p";
$ortu_wanita = "Putri dari Bpk. $ayah_w & Ibu $ibu_w";

$maps     = $klien['link_maps'] ?? '';
$alamat   = $klien['alamat_lengkap'] ?? 'Alamat belum diisi.';
$rekening = $klien['no_rekening'] ?? '';
$acara1_nama  = !empty($klien['acara1_nama'])  ? $klien['acara1_nama']  : "Akad Nikah";
$acara1_waktu = !empty($klien['acara1_waktu']) ? $klien['acara1_waktu'] : "08.00 WIB - Selesai";

$acara2_nama  = !empty($klien['acara2_nama'])  ? $klien['acara2_nama']  : "Resepsi";
$acara2_waktu = !empty($klien['acara2_waktu']) ? $klien['acara2_waktu'] : "11.00 WIB - Selesai";
$audio = !empty($klien['music']) ? $klien['music'] : "assets/music/bg-music.mp3";
$stories = $conn->query("SELECT * FROM love_stories WHERE client_id='$id_klien' ORDER BY id ASC");
$gallery = $conn->query("SELECT * FROM client_gallery WHERE client_id='$id_klien' ORDER BY id DESC");
$bank_nama = $klien['bank_nama'] ?? "Bank Central Asia";
$bank_an   = $klien['bank_an'] ?? "Nama Pengantin";
$rekening  = $klien['no_rekening'] ?? "1234567890";

$gift_nohp   = $klien['gift_nohp'] ?? "08123456789";
$gift_alamat = $klien['gift_alamat'] ?? "Alamat belum diatur";

// Foto QRIS
$qris_img = !empty($klien['foto_qris']) ? "assets/uploads/".$klien['slug']."/".$klien['foto_qris'] : "assets/images/donate.png";
// 4. PANGGIL TEMPLATE (THEMES)
$file_tema = "themes/" . $tema . ".php";

if(file_exists($file_tema)) {
    include $file_tema;
} else {
    echo "<h3>Error: Tema '$tema' tidak ditemukan!</h3>";
}
?>
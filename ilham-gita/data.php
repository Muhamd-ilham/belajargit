<?php
// DATA PENGANTIN
$nama_panggilan_pria   = "Ilham";
$nama_lengkap_pria     = "Ilham Santoso, S.Kom";
$ortu_pria             = "Putra Bpk. Hartono & Ibu Sri";

$nama_panggilan_wanita = "Gita";
$nama_lengkap_wanita   = "Gita Gutawa, S.Ak";
$ortu_wanita           = "Putri Bpk. Joko & Ibu Siti";

// DATA ACARA
$tgl_akad       = "2026-08-20"; // Format: YYYY-MM-DD (Penting buat countdown)
$tgl_tampil     = "Minggu, 20 Agustus 2026";
$jam_akad       = "08.00 WIB - Selesai";
$jam_resepsi    = "11.00 WIB - Selesai";
$lokasi_acara   = "Gedung Pernikahan Bahagia, Jakarta Selatan";
$link_maps      = "https://goo.gl/maps/contoh";

// MEDIA (Ganti link gambar dengan foto asli nanti)
$foto_cover     = "https://images.unsplash.com/photo-1606800052052-a08af7148866?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80";
$foto_pria      = "https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80";
$foto_wanita    = "https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80";
$musik_url      = "https://cdn.pixabay.com/download/audio/2022/10/18/audio_31c2730e64.mp3"; // Lagu instrumen gratis

// LOGIC NAMA TAMU (URL: /?to=Nama+Tamu)
$tamu = isset($_GET['to']) ? htmlspecialchars($_GET['to']) : "Tamu Undangan";
?>
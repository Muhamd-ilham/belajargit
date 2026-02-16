<?php
session_start();
include '../koneksi.php'; // Mundur satu folder

// 1. CEK SESSION (Wajib Login & Punya ID)
if (!isset($_SESSION['login']) || !isset($_SESSION['client_id'])) {
    echo json_encode(["status" => "error", "message" => "Akses Ditolak"]);
    exit;
}

$my_id = $_SESSION['client_id']; // ID Klien yang sedang login
$action = isset($_GET['action']) ? $_GET['action'] : '';

// A. STATISTIK
if ($action == 'stats') {
    // 1. Hitung Tamu
    $tamu = $conn->query("SELECT COUNT(*) as total FROM tamu WHERE client_id = '$my_id'")->fetch_assoc()['total'];
    
    // 2. Hitung Ucapan Masuk
    $ucapan = $conn->query("SELECT COUNT(*) as total FROM ucapan WHERE client_id = '$my_id'")->fetch_assoc()['total'];
    
    // 3. Hitung Konfirmasi Hadir
    $hadir = $conn->query("SELECT COUNT(*) as total FROM ucapan WHERE client_id = '$my_id' AND hadir='1'")->fetch_assoc()['total'];
    
    // 4. Hitung Total Dilihat (AMBIL DARI TABEL CLIENTS - KOLOM VIEWS)
    $clientData = $conn->query("SELECT views FROM clients WHERE id = '$my_id'")->fetch_assoc();
    $dilihat = isset($clientData['views']) ? $clientData['views'] : 0; 

    echo json_encode([
        "tamu" => $tamu, 
        "ucapan" => $ucapan, 
        "hadir" => $hadir, 
        "dilihat" => $dilihat
    ]);
}

// B. TAMBAH TAMU
if ($action == 'add_tamu') {
    $input = json_decode(file_get_contents('php://input'), true);
    $nama = $conn->real_escape_string($input['nama']);
    $hp   = $conn->real_escape_string($input['no_hp']);
    
    // Format nomor HP (Ganti 0 jadi 62)
    if(substr($hp, 0, 1) == '0') $hp = '62' . substr($hp, 1);

    // Insert pakai client_id
    $sql = "INSERT INTO tamu (client_id, nama, no_hp) VALUES ('$my_id', '$nama', '$hp')";
    if($conn->query($sql)) echo json_encode(["status" => "success"]);
    else echo json_encode(["status" => "error"]);
}

// C. LOAD TAMU
if ($action == 'get_tamu') {
    $res = $conn->query("SELECT * FROM tamu WHERE client_id = '$my_id' ORDER BY id DESC");
    $data = [];
    while($row = $res->fetch_assoc()) $data[] = $row;
    echo json_encode($data);
}

// D. HAPUS UCAPAN
if ($action == 'hapus_ucapan') {
    $id_ucapan = $_GET['id'];
    // Pastikan cuma bisa hapus ucapan miliknya sendiri (Security)
    $conn->query("DELETE FROM ucapan WHERE id='$id_ucapan' AND client_id='$my_id'");
    echo json_encode(["status" => "success"]);
}
?>
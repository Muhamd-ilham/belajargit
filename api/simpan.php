<?php
// api/simpan.php
include '../koneksi.php'; // Mundur satu langkah (..) buat cari koneksi.php

$input = json_decode(file_get_contents('php://input'), true);

if(isset($input['nama']) && isset($input['client_id'])) { // Pastikan ada client_id
    $client_id = $conn->real_escape_string($input['client_id']); // Tangkap ID
    $nama      = $conn->real_escape_string($input['nama']);
    $pesan     = $conn->real_escape_string($input['pesan']);
    $hadir     = $conn->real_escape_string($input['hadir']);

    // Query Simpan (Perhatikan kolom client_id)
    $sql = "INSERT INTO ucapan (client_id, nama, hadir, pesan) VALUES ('$client_id', '$nama', '$hadir', '$pesan')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Ucapan berhasil dikirim"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Gagal: " . $conn->error]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Data tidak lengkap"]);
}
$conn->close();
?>
<?php
// api/tampil.php
include '../koneksi.php';

// Tangkap ID Klien dari URL (?client_id=1)
$client_id = isset($_GET['client_id']) ? $_GET['client_id'] : 0;

// Filter query pakai WHERE client_id
$sql = "SELECT * FROM ucapan WHERE client_id = '$client_id' ORDER BY id DESC";
$result = $conn->query($sql);

$data = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
$conn->close();
?>
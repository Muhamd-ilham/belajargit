<?php
// AMBIL DATA DARI URL
// Contoh link nanti: demo.php?name=Rustic&url=https://link-tema.com
$nama_tema = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Preview Tema';
$url_tema  = isset($_GET['url']) ? htmlspecialchars($_GET['url']) : '';
$wa_admin  = "6281234567890"; // Ganti No WA

// Kalo gak ada URL, balikin ke home
if(empty($url_tema)){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Preview: <?= $nama_tema ?> - JanjiSuci</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #5a7c75;
            --dark: #2f3e46;
            --bg: #e0e5ec;
        }

        body {
            margin: 0; padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            height: 100vh;
            overflow: hidden; /* Hilangkan scroll body utama */
            display: flex;
            flex-direction: column;
        }

        /* HEADER / NAVBAR */
        .preview-header {
            background: white;
            padding: 10px 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 60px;
            z-index: 999;
            position: relative;
        }

        .btn-back {
            color: var(--dark);
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: 0.3s;
        }
        .btn-back:hover { color: var(--primary); }

        .btn-pesan {
            background: var(--primary);
            color: white;
            border-radius: 50px;
            padding: 8px 25px;
            text-decoration: none;
            font-weight: bold;
            font-size: 0.9rem;
            box-shadow: 0 4px 10px rgba(90, 124, 117, 0.3);
            transition: 0.3s;
        }
        .btn-pesan:hover { background: #46635c; color: white; }

        /* IFRAME CONTAINER */
        .iframe-wrapper {
            flex-grow: 1; /* Isi sisa ruang */
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            background-image: url('https://www.transparenttextures.com/patterns/cubes.png');
        }

        /* RESPONSIVE IFRAME (Logic Mahal) */
        iframe {
            border: none;
            background: white;
            transition: 0.3s;
        }

        /* Tampilan Desktop: Iframe jadi simulasi HP di tengah */
        @media (min-width: 769px) {
            iframe {
                width: 400px; /* Lebar HP standar */
                height: calc(100% - 40px); /* Ada jarak atas bawah dikit */
                border-radius: 20px;
                box-shadow: 0 20px 50px rgba(0,0,0,0.2);
                border: 8px solid #1a1a1a;
            }
        }

        /* Tampilan Mobile: Full Layar */
        @media (max-width: 768px) {
            .iframe-wrapper { background: white; }
            iframe {
                width: 100%;
                height: 100%;
                border-radius: 0;
                border: none;
            }
            .preview-header {
                /* Di HP header bisa dibuat sticky bottom atau top, ini contoh Top */
                position: sticky; top: 0;
            }
        }
    </style>
</head>
<body>

    <div class="preview-header">
        <a href="index.php" class="btn-back">
            <i class="fas fa-arrow-left fs-5"></i> 
            <span class="d-none d-md-inline">Kembali</span>
        </a>

        <div class="fw-bold text-dark text-truncate mx-2" style="max-width: 150px;">
            <?= $nama_tema ?>
        </div>

        <a href="https://wa.me/<?= $wa_admin ?>?text=Halo+kak+saya+mau+pesan+tema+<?= $nama_tema ?>" class="btn-pesan">
            <i class="fas fa-shopping-cart me-1"></i> Pesan
        </a>
    </div>

    <div class="iframe-wrapper">
        <iframe src="<?= $url_tema ?>" title="Preview Undangan"></iframe>
    </div>

</body>
</html>
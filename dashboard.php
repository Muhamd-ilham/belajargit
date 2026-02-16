<?php
session_start();
// Cek Login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
$my_slug = $_SESSION['slug'];
$my_id   = $_SESSION['client_id'];
?>
<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Mempelai - <?= $_SESSION['user'] ?></title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --card-bg: #ffffff;
            --bg-color: #f0f2f5;
            --text-dark: #2d3748;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-dark);
            padding-top: 80px; /* Space for fixed navbar */
        }

        /* Modern Navbar */
        .navbar {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        .navbar-brand {
            font-weight: 700;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Stats Card */
        .stat-card {
            border: none;
            border-radius: 20px;
            color: white;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease;
        }
        .stat-card:hover { transform: translateY(-5px); }
        .stat-card.blue { background: linear-gradient(135deg, #667eea, #764ba2); }
        .stat-card.green { background: linear-gradient(135deg, #2af598, #009efd); }
        .stat-card.orange { background: linear-gradient(135deg, #f6d365, #fda085); }
        .stat-card.pink { background: linear-gradient(135deg, #ff9a9e, #fecfef); }
        
        .stat-card .icon-bg {
            position: absolute;
            right: -10px;
            bottom: -10px;
            font-size: 5rem;
            opacity: 0.2;
            transform: rotate(-15deg);
        }

        /* Content Cards */
        .content-card {
            background: var(--card-bg);
            border-radius: 20px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        }
        .content-header {
            border-bottom: 1px solid #f0f0f0;
            padding: 20px 25px;
        }

        /* Custom Scrollbar */
        .custom-scroll::-webkit-scrollbar { width: 6px; }
        .custom-scroll::-webkit-scrollbar-track { background: #f1f1f1; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #cbd5e0; border-radius: 10px; }
        .custom-scroll::-webkit-scrollbar-thumb:hover { background: #a0aec0; }

        /* Floating Share Box */
        .share-box {
            background: #fff;
            border-radius: 15px;
            border-left: 5px solid #764ba2;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        /* Table Styling */
        .table-custom tr td {
            vertical-align: middle;
            padding: 15px;
        }
        .btn-action {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: 0.2s;
        }
        .btn-action:hover { transform: scale(1.1); }

        /* Mobile Adjustments */
        @media (max-width: 768px) {
            .stat-card { margin-bottom: 15px; }
            .content-card { margin-bottom: 20px; }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-heart me-2"></i>WeddingPanel</a>
        <div class="d-flex align-items-center gap-3">
            <div class="d-none d-md-block text-end">
                <small class="text-muted d-block" style="font-size: 0.75rem;">Login sebagai</small>
                <span class="fw-bold text-dark"><?= $_SESSION['user'] ?></span>
            </div>
            <a href="logout.php" class="btn btn-outline-danger btn-sm rounded-pill px-4"><i class="fa-solid fa-power-off me-1"></i> Keluar</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    
    <div class="row mb-4 align-items-center">
        <div class="col-md-6 mb-3 mb-md-0">
            <h2 class="fw-bold mb-0">Dashboard Overview</h2>
            <p class="text-muted">Pantau aktivitas undangan digital Anda secara realtime.</p>
        </div>
        <div class="col-md-6">
            <div class="share-box p-3 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                <div class="text-truncate w-100">
                    <small class="text-muted text-uppercase fw-bold" style="font-size: 0.7rem;">Link Undangan Publik</small>
                    <div class="fw-bold text-primary text-truncate">http://localhost/undangan/?u=<?= $my_slug ?></div>
                </div>
                <button onclick="copyLink('http://localhost/undangan/?u=<?= $my_slug ?>', this)" class="btn btn-dark rounded-pill px-4 flex-shrink-0">
                    <i class="fa-regular fa-copy me-2"></i>Salin
                </button>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-5">
        <div class="col-6 col-lg-3">
            <div class="stat-card blue p-4 h-100">
                <i class="fa-solid fa-users icon-bg"></i>
                <h2 class="fw-bold" id="stat-tamu">0</h2>
                <span class="opacity-75">Total Tamu</span>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="stat-card green p-4 h-100">
                <i class="fa-solid fa-eye icon-bg"></i>
                <h2 class="fw-bold" id="stat-buka">0</h2>
                <span class="opacity-75">Telah Dilihat</span>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="stat-card orange p-4 h-100">
                <i class="fa-solid fa-comments icon-bg"></i>
                <h2 class="fw-bold" id="stat-ucapan">0</h2>
                <span class="opacity-75">Ucapan Masuk</span>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="stat-card pink p-4 h-100">
                <i class="fa-solid fa-user-check icon-bg"></i>
                <h2 class="fw-bold" id="stat-hadir">0</h2>
                <span class="opacity-75">Konfirmasi Hadir</span>
            </div>
        </div>
    </div>

    <div class="row g-4">
        
        <div class="col-lg-7">
            <div class="content-card h-100">
                <div class="content-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 fw-bold"><i class="fa-solid fa-address-book text-primary me-2"></i>Daftar Tamu</h5>
                    <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3">Kelola Undangan</span>
                </div>
                <div class="p-4">
                    <form id="form-tamu" class="bg-light p-3 rounded-4 mb-4 border">
                        <div class="row g-2">
                            <div class="col-md-5">
                                <input type="text" class="form-control border-0 shadow-sm" id="input-nama" placeholder="Nama Tamu (ex: Budi Santoso)" required>
                            </div>
                            <div class="col-md-5">
                                <input type="number" class="form-control border-0 shadow-sm" id="input-hp" placeholder="WhatsApp (ex: 62812...)">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary w-100 shadow-sm"><i class="fa-solid fa-plus"></i></button>
                            </div>
                        </div>
                    </form>

                    <div class="custom-scroll" style="max-height: 450px; overflow-y: auto;">
                        <table class="table table-hover table-custom table-borderless">
                            <thead class="text-muted small text-uppercase">
                                <tr>
                                    <th>Nama Tamu</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="list-tamu">
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-5">
            <div class="content-card h-100">
                <div class="content-header">
                    <h5 class="mb-0 fw-bold"><i class="fa-solid fa-heart text-danger me-2"></i>Ucapan & Doa</h5>
                </div>
                <div class="card-body p-0">
                    <div id="list-ucapan" class="custom-scroll p-3" style="max-height: 600px; overflow-y: auto;">
                        <div class="text-center text-muted py-5">
                            <i class="fa-solid fa-spinner fa-spin fa-2x mb-3"></i>
                            <p>Memuat ucapan...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    const BASE_URL = "http://localhost/undangan/?u=<?= $my_slug ?>"; 

    document.addEventListener('DOMContentLoaded', () => {
        loadStats();
        loadTamu();
        loadUcapan();
    });

    // 1. Load Statistik
    function loadStats() {
        fetch('api/admin_api.php?action=stats')
            .then(res => res.json())
            .then(data => {
                animateValue("stat-tamu", 0, data.tamu, 1000);
                animateValue("stat-buka", 0, data.dilihat, 1000);
                animateValue("stat-ucapan", 0, data.ucapan, 1000);
                animateValue("stat-hadir", 0, data.hadir, 1000);
            });
    }

    // Animasi Angka Naik
    function animateValue(id, start, end, duration) {
        let obj = document.getElementById(id);
        let range = end - start;
        let minTimer = 50;
        let stepTime = Math.abs(Math.floor(duration / range));
        stepTime = Math.max(stepTime, minTimer);
        let startTime = new Date().getTime();
        let endTime = startTime + duration;
        let timer;
        function run() {
            let now = new Date().getTime();
            let remaining = Math.max((endTime - now) / duration, 0);
            let value = Math.round(end - (remaining * range));
            obj.innerHTML = value;
            if (value == end) clearInterval(timer);
        }
        timer = setInterval(run, stepTime);
        run();
    }

    // 2. Tambah Tamu
    document.getElementById('form-tamu').addEventListener('submit', function(e){
        e.preventDefault();
        const nama = document.getElementById('input-nama').value;
        const hp = document.getElementById('input-hp').value || '-';
        
        // Disable button biar ga double click
        const btn = this.querySelector('button');
        const originalBtn = btn.innerHTML;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';
        btn.disabled = true;

        fetch('api/admin_api.php?action=add_tamu', {
            method: 'POST',
            body: JSON.stringify({ nama: nama, no_hp: hp })
        }).then(() => {
            document.getElementById('form-tamu').reset();
            loadTamu();
            loadStats();
            btn.innerHTML = originalBtn;
            btn.disabled = false;
        });
    });

    // 3. Load Daftar Tamu
    function loadTamu() {
        fetch('api/admin_api.php?action=get_tamu')
            .then(res => res.json())
            .then(data => {
                let html = '';
                if(data.length === 0) {
                    html = '<tr><td colspan="2" class="text-center text-muted py-4">Belum ada tamu yang diundang.</td></tr>';
                } else {
                    data.forEach(t => {
                        const linkUrl = `${BASE_URL}&to=${encodeURIComponent(t.nama)}`;
                        let tombol = '';
                        
                        // Tombol WA jika ada nomor HP
                        if(t.no_hp && t.no_hp !== '-' && t.no_hp.length > 5) {
                            // Format HP (jika depannya 0 ubah jadi 62)
                            let hp = t.no_hp.replace(/^0/, '62');
                            const pesan = `Assalamu'alaikum ${t.nama},\n\nTanpa mengurangi rasa hormat, kami mengundang Anda untuk hadir di acara pernikahan kami.\n\nInfo lengkap: ${linkUrl}\n\nTerima kasih.`;
                            tombol += `<a href="https://wa.me/${hp}?text=${encodeURIComponent(pesan)}" target="_blank" class="btn btn-action btn-success text-white shadow-sm me-1"><i class="fa-brands fa-whatsapp"></i></a>`;
                        }
                        
                        // Tombol Copy Link
                        tombol += `<button onclick="copyLink('${linkUrl}', this)" class="btn btn-action btn-light border shadow-sm text-secondary"><i class="fa-regular fa-copy"></i></button>`;

                        html += `
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; font-weight:bold;">
                                        ${t.nama.charAt(0).toUpperCase()}
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">${t.nama}</div>
                                        <small class="text-muted"><i class="fa-solid fa-phone me-1" style="font-size:0.7rem"></i> ${t.no_hp}</small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">${tombol}</td>
                        </tr>`;
                    });
                }
                document.getElementById('list-tamu').innerHTML = html;
            });
    }

    // 4. Load Ucapan
    function loadUcapan() {
        fetch('api/tampil.php?client_id=<?= $my_id ?>')
            .then(res => res.json())
            .then(data => {
                let html = '';
                if(data.length === 0) {
                    html = '<div class="text-center text-muted py-5"><i class="fa-regular fa-comment-dots fa-3x mb-3 opacity-25"></i><p>Belum ada ucapan masuk.</p></div>';
                } else {
                    data.forEach(u => {
                        let badge = '';
                        if(u.hadir == '1') badge = '<span class="badge bg-success bg-opacity-10 text-success rounded-pill" style="font-size:0.65rem">Hadir</span>';
                        else if(u.hadir == '2') badge = '<span class="badge bg-danger bg-opacity-10 text-danger rounded-pill" style="font-size:0.65rem">Maaf</span>';

                        html += `
                        <div class="bg-light p-3 rounded-4 mb-3 position-relative border-start border-4 border-primary shadow-sm">
                            <button onclick="hapus('${u.id}')" class="btn btn-sm text-muted position-absolute top-0 end-0 mt-1 me-1"><i class="fa-solid fa-xmark"></i></button>
                            <div class="d-flex align-items-center mb-2">
                                <span class="fw-bold text-dark me-2">${u.nama}</span>
                                ${badge}
                            </div>
                            <p class="mb-1 text-secondary small" style="line-height: 1.6;">"${u.pesan}"</p>
                            <small class="text-muted opacity-50" style="font-size: 0.7rem;"><i class="fa-regular fa-clock me-1"></i>${u.waktu}</small>
                        </div>`;
                    });
                }
                document.getElementById('list-ucapan').innerHTML = html;
            });
    }

    function hapus(id) {
        if(confirm('Hapus ucapan ini secara permanen?')) {
            fetch(`api/admin_api.php?action=hapus_ucapan&id=${id}`).then(() => { loadUcapan(); loadStats(); });
        }
    }
    
    function copyLink(text, btn) {
        navigator.clipboard.writeText(text);
        const icon = btn.innerHTML;
        
        // Ubah tampilan tombol sesaat
        if(btn.tagName === 'BUTTON') {
            btn.classList.remove('btn-dark', 'btn-light', 'text-secondary');
            btn.classList.add('btn-success', 'text-white');
            btn.innerHTML = '<i class="fa-solid fa-check"></i>';
            
            setTimeout(() => {
                btn.innerHTML = icon;
                btn.classList.remove('btn-success', 'text-white');
                // Kembalikan class asli agak tricky, jadi kita reset ke default btn-light untuk list tamu
                if(btn.closest('.share-box')) {
                    btn.classList.add('btn-dark'); // Tombol di header
                } else {
                    btn.classList.add('btn-light', 'text-secondary'); // Tombol di tabel
                }
            }, 1500);
        }
    }
</script>
</body>
</html>
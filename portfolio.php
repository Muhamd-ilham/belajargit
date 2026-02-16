<?php
// --- KONFIGURASI UTAMA ---
$nama_brand = "0urForeverBegins";
$wa_admin   = "6281234567890"; 
$tahun      = date('Y');

// DATA FITUR
$fitur_unggulan = [
    ["icon" => "fas fa-paint-brush", "judul" => "Desain Premium", "ket" => "Tampilan kekinian"],
    ["icon" => "far fa-id-card", "judul" => "Nama Tamu", "ket" => "Unlimited nama"],
    ["icon" => "fas fa-stopwatch", "judul" => "Countdown", "ket" => "Hitung mundur"],
    ["icon" => "fas fa-map-marked-alt", "judul" => "Peta Lokasi", "ket" => "Akurasi Google Maps"],
    ["icon" => "fas fa-music", "judul" => "Musik Latar", "ket" => "Autoplay audio"],
    ["icon" => "fas fa-book-open", "judul" => "Buku Tamu", "ket" => "Ucapan & Doa"],
    ["icon" => "fas fa-gift", "judul" => "Amplop Digital", "ket" => "Cashless Gift"],
    ["icon" => "fas fa-images", "judul" => "Galeri Foto", "ket" => "Album prewed"],
    ["icon" => "fas fa-chart-line", "judul" => "Dashboard", "ket" => "Pantau tamu"],

];

// DATA CLIENT (Untuk Slider) - Ganti foto klien asli nanti di sini
$data_client = [
    ["nama" => "Ical & Merry", "tgl" => "11 Jan 2026", "foto" => "https://images.unsplash.com/photo-1621621667797-e06afc217fb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"],
    ["nama" => "Fadil & Salwa", "tgl" => "4 Jan 2026", "foto" => "https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"],
    ["nama" => "Fitri & Deni", "tgl" => "18 Jan 2026", "foto" => "https://images.unsplash.com/photo-1522673607200-1645062cd495?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"],
    ["nama" => "Budi & Desi", "tgl" => "18 Jan 2026", "foto" => "https://images.unsplash.com/photo-1519225448526-72c6ef4c5cbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"],
    ["nama" => "Linda & Yuda", "tgl" => "8 Jan 2026", "foto" => "https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"],
    ["nama" => "Rosma & Nopri", "tgl" => "8 Feb 2026", "foto" => "https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"],
    ["nama" => "Anjar & Dandi", "tgl" => "11 Jan 2026", "foto" => "https://images.unsplash.com/photo-1520854221256-17451cc330e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80"]
];

// DATA TEMA
$daftar_tema = [
    ["nama" => "Sage Rustic", "harga" => "49.000", "gambar" => "https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80", "link" => "demo.php?name=Sage+Rustic&url=ilham-gita/"],
    ["nama" => "Sage Rustic", "harga" => "49.000", "gambar" => "https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80", "link" => "demo.php?name=Sage+Rustic&url=ilham-gita/"],
    ["nama" => "Floral Pink", "harga" => "49.000", "gambar" => "https://images.unsplash.com/photo-1522673607200-1645062cd495?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80", "link" => "#"],
    ["nama" => "Black Elegant", "harga" => "99.000", "gambar" => "https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80", "link" => "#"]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?= $nama_brand ?> - Undangan Digital</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <style>
        :root {
            --primary: #5a7c75;
            --dark: #2f3e46;
            --accent: #d4a373;
            --bg-light: #f8fcfb;
        }

        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-light); color: var(--dark); overflow-x: hidden; }
        h1, h2, h3, .font-serif { font-family: 'Playfair Display', serif; }

        /* NAVBAR */
        .navbar { background: rgba(255,255,255,0.9); backdrop-filter: blur(10px); padding: 15px 0; }
        .navbar-brand { font-weight: 700; color: var(--primary) !important; font-size: 1.5rem; }

        /* HERO SECTION */
        .hero-section { padding: 120px 0 80px 0; position: relative; overflow: hidden; }
        .mockup-container { position: relative; height: 500px; width: 100%; display: flex; justify-content: center; align-items: center; }
        .phone-mockup { width: 240px; height: 480px; background: #000; border-radius: 40px; border: 8px solid #1a1a1a; position: absolute; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5); overflow: hidden; }
        .phone-screen { width: 100%; height: 100%; background-size: cover; background-position: top center; }
        .phone-1 { transform: rotate(-15deg) translate(-60px, 20px) scale(0.9); z-index: 1; }
        .phone-2 { transform: rotate(-5deg) translate(60px, -20px); z-index: 2; border-color: #2c3e50; }
        
        .floating-badge { position: absolute; background: #0f2f44; color: white; padding: 12px 25px; border-radius: 50px 0 50px 50px; box-shadow: 0 10px 20px rgba(0,0,0,0.2); z-index: 3; display: flex; align-items: center; gap: 10px; animation: float 3s ease-in-out infinite; }
        .badge-dot { width: 12px; height: 12px; background: #2ecc71; border-radius: 50%; box-shadow: 0 0 10px #2ecc71; }
        .badge-top { top: 50px; right: 20px; border-radius: 50px 50px 0 50px; }
        .badge-bottom { bottom: 50px; left: 20px; animation-delay: 1.5s; }
        @keyframes float { 0% { transform: translateY(0px); } 50% { transform: translateY(-10px); } 100% { transform: translateY(0px); } }
        @media (max-width: 991px) { .hero-section { padding-top: 100px; text-align: center; } .mockup-container { height: 400px; margin-top: 30px; transform: scale(0.8); } .badge-top { right: 0; } .badge-bottom { left: 0; } }

        /* --- SECTION CLIENT BARU --- */
        .client-section { background: white; padding: 60px 0; border-top: 1px solid #eee; border-bottom: 1px solid #eee; }
        .stat-card { text-align: center; padding: 20px; }
        .stat-num { font-size: 2rem; font-weight: 800; color: var(--primary); font-family: 'Playfair Display', serif; }
        .stat-label { font-size: 0.9rem; color: #666; text-transform: uppercase; letter-spacing: 1px; }
        
        /* Swiper Custom */
        .client-card { text-align: center; padding: 10px; }
        .client-img-wrap { 
            width: 100px; height: 100px; margin: 0 auto 15px auto; 
            border-radius: 50%; overflow: hidden; border: 3px solid var(--accent); 
            padding: 3px; background: white;
        }
        .client-img { width: 100%; height: 100%; object-fit: cover; border-radius: 50%; }
        .client-name { font-weight: bold; font-family: 'Playfair Display', serif; font-size: 1.1rem; margin-bottom: 5px; }
        .client-date { font-size: 0.8rem; color: #888; display: block; }

        /* FITUR GRID */
        .feature-box { background: white; padding: 20px; border-radius: 15px; text-align: center; border: 1px solid #eee; height: 100%; transition: 0.3s; }
        .feature-box:hover { transform: translateY(-5px); border-color: var(--primary); }
        .icon-circle { width: 50px; height: 50px; background: #eef5f3; color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 20px; margin: 0 auto 15px auto; }

        /* TEMA */
        .theme-card { border: none; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .theme-img { height: 250px; width: 100%; object-fit: cover; }

        /* CUSTOM TABS */
    .nav-pills .nav-link {
        color: var(--dark);
        background-color: white;
        border: 1px solid #eee;
        transition: 0.3s;
    }
    .nav-pills .nav-link.active {
        background-color: var(--primary);
        color: white;
        border-color: var(--primary);
        box-shadow: 0 5px 15px rgba(90, 124, 117, 0.3);
    }
    .nav-pills .nav-link:hover:not(.active) {
        background-color: #f8f9fa;
        transform: translateY(-2px);
    }

    /* THEME CARD HOVER EFFECT */
    .theme-card { transition: 0.3s; }
    .theme-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important; }
    
    .theme-img { 
        height: 200px; 
        object-fit: cover; 
        transition: 0.5s; 
    }
    .theme-card:hover .theme-img { transform: scale(1.05); }
    
    /* Overlay Tombol (Muncul pas hover di Desktop) */
    .theme-overlay {
        position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0,0,0,0.3);
        opacity: 0; transition: 0.3s;
    }
    .theme-card:hover .theme-overlay { opacity: 1; }

    /* Efek Hover CTA Box */
    .hover-scale { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hover-scale:hover { 
        transform: translateY(-5px) scale(1.02); 
        box-shadow: 0 15px 30px rgba(0,0,0,0.2) !important; 
    }

    /* TIMPA WARNA BOOTSTRAP BIAR JADI TEMA KITA */

/* 1. Mengubah Tulisan Primary jadi Hijau */
.text-primary {
    color: var(--primary) !important;
}

/* 2. Mengubah Tombol Primary jadi Hijau */
.btn-primary {
    background-color: var(--primary) !important;
    border-color: var(--primary) !important;
}

/* 3. Efek saat tombol disorot (Hover) jadi lebih gelap dikit */
.btn-primary:hover {
    background-color: #46635c !important; /* Warna sage agak gelap */
    border-color: #46635c !important;
}

        .float-wa { position: fixed; bottom: 25px; right: 25px; background: #25D366; color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 30px; z-index: 100; box-shadow: 0 5px 15px rgba(0,0,0,0.2); text-decoration: none; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-ring me-2"></i><?= $nama_brand ?></a>
            <a href="https://wa.me/<?= $wa_admin ?>" class="btn btn-outline-dark rounded-pill px-4 d-none d-lg-block">Login Client</a>
            <a href="https://wa.me/<?= $wa_admin ?>" class="btn btn-success btn-sm rounded-pill d-lg-none">Chat WA</a>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                    <span class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill fw-bold">BEST PRICE 49K</span>
                    <h1 class="display-4 fw-bold mb-4 font-serif" style="line-height: 1.2;">Sebar Undangan<br>Makin Berkesan</h1>
                    <p class="lead text-muted mb-4">Buat undangan pernikahan digital yang elegan, fitur lengkap, dan harga bersahabat. Siap dalam hitungan jam.</p>
                    <div class="d-flex gap-3 justify-content-center justify-content-lg-start">
                        <a href="#tema" class="btn btn-dark btn-lg rounded-pill px-4 shadow">Lihat Tema</a>
                        <a href="#fitur" class="btn btn-outline-success btn-lg rounded-pill px-4">Cek Fitur</a>
                    </div>
                </div>
                <div class="col-lg-7 position-relative" data-aos="zoom-in" data-aos-delay="200">
                    <div class="mockup-container">
                        <div class="floating-badge badge-top">
                            <div class="badge-dot"></div>
                            <div class="text-start lh-1">
                                <div class="fw-bold fs-5">1 Jam</div>
                                <small style="font-size: 0.7rem; opacity: 0.8;">Pengerjaan</small>
                            </div>
                        </div>
                        <div class="phone-mockup phone-1">
                            <div class="phone-screen" style="background-image: url('https://images.unsplash.com/photo-1606800052052-a08af7148866?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80');"></div>
                        </div>
                        <div class="phone-mockup phone-2">
                            <div class="phone-screen" style="background-image: url('https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80');"></div>
                        </div>
                        <div class="floating-badge badge-bottom">
                            <div class="badge-dot"></div>
                            <div class="text-start lh-1">
                                <div class="fw-bold fs-5">Gratis</div>
                                <small style="font-size: 0.7rem; opacity: 0.8;">Revisi Sepuasnya</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-md-4 mb-4 mb-md-0 border-end">
                    <h5 class="text-muted text-uppercase ls-1 small mb-2">#OurBelovedCustomer</h5>
                    <h2 class="font-serif fw-bold display-6 mb-3">Mereka Yang Berbahagia</h2>
                    <div class="row">
                        <div class="col-6">
                            <div class="stat-num">23k+</div>
                            <div class="stat-label">Undangan</div>
                        </div>
                        <div class="col-6">
                            <div class="stat-num">12Jt+</div>
                            <div class="stat-label">Terkirim</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php foreach($data_client as $client): ?>
                            <div class="swiper-slide">
                                <div class="client-card">
                                    <div class="client-img-wrap shadow-sm">
                                        <img src="<?= $client['foto'] ?>" alt="<?= $client['nama'] ?>" class="client-img">
                                    </div>
                                    <div class="client-name"><?= $client['nama'] ?></div>
                                    <span class="badge bg-light text-dark border"><?= $client['tgl'] ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fitur" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-success fw-bold ls-1">FITUR LENGKAP</h6>
                <h2 class="font-serif fw-bold">Semua yang Kamu Butuhkan</h2>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3">
                <?php foreach($fitur_unggulan as $fitur): ?>
                <div class="col" data-aos="fade-up">
                    <div class="feature-box">
                        <div class="icon-circle">
                            <i class="<?= $fitur['icon'] ?>"></i>
                        </div>
                        <h6 class="fw-bold mb-1" style="font-size: 0.9rem;"><?= $fitur['judul'] ?></h6>
                        <p class="text-muted small mb-0" style="font-size: 0.75rem;"><?= $fitur['ket'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0" data-aos="fade-right">
                    <div class="position-relative">
                        <div style="position: absolute; top: -20px; left: -20px; width: 100%; height: 100%; background: var(--secondary); border-radius: 20px; opacity: 0.2; transform: rotate(-2deg); z-index: 0;"></div>
                        
                        <img src="https://ringvitation.com/wp-content/uploads/2022/06/dashboard.png" class="img-fluid rounded-4 shadow-lg position-relative" style="z-index: 1; border: 1px solid #eee;" alt="Tampilan Dashboard Client">
                        
                        <div class="bg-dark text-white px-3 py-2 rounded-pill shadow position-absolute d-none d-md-block" style="bottom: 20px; right: -20px; z-index: 2;">
                            <i class="fas fa-magic text-warning me-2"></i>Fitur Sultan
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 ps-lg-5" data-aos="fade-left">
                    <h6 class="text-uppercase fw-bold letter-spacing-2 mb-2" style="color: #5a7c75;">EXCLUSIVE FEATURE</h6>
                    <h2 class="font-serif fw-bold display-6 mb-4">Client Dashboard & SenderKit</h2>
                    
                    <p class="text-muted lead mb-4" style="font-size: 1rem; line-height: 1.8;">
                        Kelola undangan Anda layaknya profesional. Di <b>Client Dashboard</b>, Anda dapat memantau statistik undangan secara <i>real-time</i>.
                    </p>

                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start">
                            <div class="bg-light text-primary rounded-circle p-2 me-3 shadow-sm">
                                <i class="fas fa-chart-pie fa-lg"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Pantau Statistik</h6>
                                <p class="small text-muted mb-0">Lihat jumlah undangan dibuka, ucapan masuk, dan konfirmasi kehadiran (RSVP) tamu.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="bg-light text-success rounded-circle p-2 me-3 shadow-sm">
                                <i class="fab fa-whatsapp fa-lg"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">SenderKit (Kirim WA Otomatis)</h6>
                                <p class="small text-muted mb-0">Kirim ratusan undangan hanya dengan sekali klik tanpa perlu simpan nomor satu per satu.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="bg-light text-danger rounded-circle p-2 me-3 shadow-sm">
                                <i class="fas fa-heart fa-lg"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Kelola Ucapan</h6>
                                <p class="small text-muted mb-0">Baca doa dari tamu dan sembunyikan ucapan yang tidak diinginkan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <a href="#harga" class="btn btn-primary rounded-pill px-4 shadow-sm">Dapatkan Akses Sekarang <i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="tema" class="py-5 bg-light">
        <div class="container py-4">
            
            <div class="text-center mb-5" data-aos="fade-down">
                <h6 class="text-muted fw-bold letter-spacing-2">DESIGN COLLECTION</h6>
                <h2 class="font-serif display-5 fw-bold text-primary">Pilihan Tema Favorit</h2>
                <div style="width: 80px; height: 3px; background: var(--accent); margin: 20px auto;"></div>
            </div>

            <ul class="nav nav-pills mb-5 justify-content-center flex-nowrap" id="pills-tab" role="tablist" data-aos="fade-up" style="overflow-x: auto;">
    
    <li class="nav-item" role="presentation">
        <button class="nav-link active rounded-pill px-3 px-md-4 me-2 text-nowrap" id="pills-gold-tab" data-bs-toggle="pill" data-bs-target="#pills-gold" type="button" role="tab" style="font-size: 0.9rem;">
            Gold (Ada Foto)
        </button>
    </li>
    
    <li class="nav-item" role="presentation">
        <button class="nav-link rounded-pill px-3 px-md-4 text-nowrap" id="pills-nofoto-tab" data-bs-toggle="pill" data-bs-target="#pills-nofoto" type="button" role="tab" style="font-size: 0.9rem;">
            Hemat (Tanpa Foto)
        </button>
    </li>

</ul>

            <div class="tab-content" id="pills-tabContent">
                
                <div class="tab-pane fade show active" id="pills-gold" role="tabpanel">
                    <div class="row g-4">
                        <?php 
// DATA TEMA GOLD (LENGKAP SEMUA ADA LINK)
$tema_gold = [
    [
        "nama" => "Nobuka", 
        "img" => "https://ringvitation.com/wp-content/uploads/2024/09/nobuka-web-300x300.jpg", 
        "harga" => "129.000", 
        "coret" => "309.000",
        "link" => "demo.php?name=Nobuka&url=ilham-gita/"
    ],
    [
        "nama" => "Akumi", 
        "img" => "https://ringvitation.com/wp-content/uploads/2024/08/Akumi-Web-300x300.jpg", 
        "harga" => "129.000", 
        "coret" => "309.000",
        "link" => "demo.php?name=Akumi&url=ilham-gita/" // <-- Pastikan ini ada!
    ],
    [
        "nama" => "Kresan", 
        "img" => "https://ringvitation.com/wp-content/uploads/2024/08/Kresan-web-300x300.jpg", 
        "harga" => "129.000", 
        "coret" => "309.000",
        "link" => "demo.php?name=Kresan&url=ilham-gita/" // <-- Ini juga!
    ],
    [
        "nama" => "Golden Luxury", 
        "img" => "https://images.unsplash.com/photo-1519225448526-72c6ef4c5cbe?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80", 
        "harga" => "129.000", 
        "coret" => "309.000",
        "link" => "demo.php?name=Golden&url=ilham-gita/" // <-- Dan ini!
    ]
];
                        
                        foreach($tema_gold as $item): ?>
                        <div class="col-6 col-md-3" data-aos="zoom-in">
    <div class="card theme-card h-100 border-0 shadow-sm">
        <div class="position-relative overflow-hidden">
            <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2">Best Seller</span>
            <img src="<?= $item['img'] ?>" class="card-img-top theme-img" alt="<?= $item['nama'] ?>">
            
            <div class="theme-overlay d-flex align-items-center justify-content-center gap-2">
                <a href="<?= $item['link'] ?? '#' ?>" class="btn btn-light btn-sm rounded-pill"><i class="far fa-eye"></i></a>
                
                <a href="https://wa.me/<?= $wa_admin ?>?text=Order+Tema+<?= $item['nama'] ?>" class="btn btn-primary btn-sm rounded-pill"><i class="fas fa-shopping-basket"></i></a>
            </div>
        </div>
        
        <div class="card-body text-center p-3">
            <h5 class="font-serif fw-bold mb-1"><?= $item['nama'] ?></h5>
            <div class="mb-3">
                <span class="text-muted text-decoration-line-through small me-1">Rp <?= $item['coret'] ?></span>
                <span class="text-primary fw-bold">Rp <?= $item['harga'] ?></span>
            </div>
            <div class="d-grid gap-2">
                <a href="<?= $item['link'] ?>" class="btn btn-outline-dark btn-sm rounded-pill">Preview</a>
                
                <a href="https://wa.me/<?= $wa_admin ?>?text=Order+Tema+<?= $item['nama'] ?>" class="btn btn-primary btn-sm rounded-pill">Pesan</a>
            </div>
        </div>
    </div>
</div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-nofoto" role="tabpanel">
                    <div class="row g-4">
                        <?php 
                        // DATA TEMA TANPA FOTO
                        $tema_nofoto = [
                            ["nama" => "Negi", "img" => "https://ringvitation.com/wp-content/uploads/2023/09/Negi-500-300x300.jpg", "harga" => "59.000", "coret" => "149.000"],
                            ["nama" => "Madoka", "img" => "https://ringvitation.com/wp-content/uploads/2024/01/Madoka-Web-300x300.jpg", "harga" => "59.000", "coret" => "149.000"],
                            ["nama" => "Selena", "img" => "https://ringvitation.com/wp-content/uploads/2023/07/selena-300x300.jpg", "harga" => "59.000", "coret" => "149.000"],
                            ["nama" => "Minimalist White", "img" => "https://images.unsplash.com/photo-1522673607200-1645062cd495?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80", "harga" => "59.000", "coret" => "149.000"]
                        ];
                        
                        foreach($tema_nofoto as $item): ?>
                        <div class="col-6 col-md-3" data-aos="zoom-in">
                            <div class="card theme-card h-100 border-0 shadow-sm">
                                <div class="position-relative overflow-hidden">
                                    <span class="badge bg-secondary text-white position-absolute top-0 start-0 m-2">Hemat</span>
                                    <img src="<?= $item['img'] ?>" class="card-img-top theme-img" alt="<?= $item['nama'] ?>">
                                </div>
                                <div class="card-body text-center p-3">
                                    <h5 class="font-serif fw-bold mb-1"><?= $item['nama'] ?></h5>
                                    <div class="mb-3">
                                        <span class="text-muted text-decoration-line-through small me-1">Rp <?= $item['coret'] ?></span>
                                        <span class="text-success fw-bold">Rp <?= $item['harga'] ?></span>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <a href="#" class="btn btn-outline-dark btn-sm rounded-pill">Preview</a>
                                        <a href="https://wa.me/<?= $wa_admin ?>?text=Order+Tema+<?= $item['nama'] ?>" class="btn btn-success btn-sm rounded-pill">Pesan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-dark rounded-pill px-5 py-2">Lihat Semua Katalog <i class="fas fa-arrow-right ms-2"></i></a>
            </div>

        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="font-serif text-center mb-4">Tanya Jawab</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="accordion accordion-flush" id="faqlist">
                        <div class="accordion-item mb-2 border rounded">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Berapa lama proses pengerjaan?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body text-muted">Maksimal 24 jam setelah data yang dikirimkan lengkap.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-2 border rounded">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed rounded" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Apakah bisa revisi?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body text-muted">Tentu! Kami memberikan garansi revisi sepuasnya (teks & foto) sampai hari H.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 position-relative" style="background-color: var(--primary); color: white; overflow: hidden;">
        
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1; background-image: radial-gradient(#fff 2px, transparent 2px); background-size: 30px 30px;"></div>

        <div class="container position-relative z-1">
            <div class="row align-items-center">
                
                <div class="col-lg-7 text-center text-lg-start mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="font-serif fw-bold mb-2">Jasa Pembuatan Website Undangan Profesional</h2>
                    <h4 class="text-warning mb-3 font-serif fst-italic">"Kamu di tempat yang tepat!"</h4>
                    <p class="fs-5 mb-0 opacity-90" style="line-height: 1.6;">
                        Berpengalaman sejak 2021, kami sudah membantu ribuan pasangan di momen bahagianya. 
                        Sekarang giliranmu untuk mewujudkan undangan impian!
                    </p>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    <a href="https://wa.me/<?= $wa_admin ?>?text=Halo+kak+saya+mau+konsultasi+undangan" class="text-decoration-none">
                        <div class="bg-white p-4 rounded-4 shadow-lg d-flex align-items-center justify-content-center hover-scale transition-all">
                            <div class="bg-success text-white rounded-circle p-3 me-3 d-flex align-items-center justify-content-center shadow-sm" style="width: 65px; height: 65px;">
                                <i class="fab fa-whatsapp fa-2x"></i>
                            </div>
                            <div>
                                <small class="text-muted fw-bold letter-spacing-1 d-block mb-1">KONSULTASI 24/7</small>
                                <span class="text-dark fw-bold fs-3 font-monospace">+<?= $wa_admin ?></span>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <p class="mb-0 small opacity-75">&copy; <?= $tahun ?> <?= $nama_brand ?>. Made with Love.</p>
    </footer>

    <a href="https://wa.me/<?= $wa_admin ?>" class="float-wa shadow-lg">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    
    <script> 
        AOS.init(); 
        
        // Inisialisasi Slider Client (Auto jalan)
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3, // Di HP muncul 3 (biar padat)
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2000, // Geser setiap 2 detik
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 5, // Di Laptop muncul 5
                    spaceBetween: 20,
                },
            },
        });
    </script>
</body>
</html>
<?php
// FORMAT TANGGAL INDO
function tgl_indo($tanggal){
    if(empty($tanggal)) return "Tanggal Belum Diset";
    $bulan = array (
        1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    );
    $pecahkan = explode('-', $tanggal);
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
$tanggal_indo = tgl_indo($tgl_acara);
?>
<!doctype html>
<html lang="id" data-bs-theme="auto">

<head>
    <!-- Common Tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Undangan Pernikahan <?= $pria ?> & <?= $wanita ?> Secara Online</title>

    <!-- SEO Tag -->
    <meta name="author" content="dewanakl">
    <meta name="language" content="id">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="googlebot" content="index, follow, max-image-preview:large">
    <meta name="title" content="Website Undangan Pernikahan <?= $pria ?> & <?= $wanita ?> Secara Online">
    <meta name="description" content="Website Undangan Pernikahan <?= $pria ?> & <?= $wanita ?> Secara Online">
    <meta name="keywords" content="undangan, wedding, undangan digital, undangan online, wedding invitation, template undangan, template undangan pernikahan, undangan pernikahan, template undangan online, wedding invitation github, template website, template website undangan pernikahan">
    <meta property="og:title" content="Website Undangan Pernikahan <?= $pria ?> & <?= $wanita ?> Secara Online">
    <meta property="og:description" content="Website Undangan Pernikahan <?= $pria ?> & <?= $wanita ?> Secara Online">
    <meta property="og:keywords" content="undangan, wedding, undangan digital, undangan online, wedding invitation, template undangan, template undangan pernikahan, undangan pernikahan, template undangan online, wedding invitation github, template website, template website undangan pernikahan">
    <meta property="og:image" content="https://ulems.my.id/assets/images/bg.webp">
    <meta property="og:image:secure_url" content="https://ulems.my.id/assets/images/bg.webp">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:alt" content="Website Undangan Pernikahan <?= $pria ?> & <?= $wanita ?> Secara Online">
    <meta property="og:image:width" content="980">
    <meta property="og:image:height" content="980">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:url" content="https://ulems.my.id">
    <meta property="og:site_name" content="Website Undangan Pernikahan <?= $pria ?> & <?= $wanita ?> Secara Online">

    <!-- Appearance -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Website Undangan Pernikahan <?= $pria ?> & <?= $wanita ?> Secara Online">
    <meta name="theme-color" content="#000000">
    <meta name="color-scheme" content="dark light">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="canonical" href="https://ulems.my.id/">
    <link rel="icon" type="image/png" sizes="192x192" href="https://ulems.my.id/assets/images/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="192x192" href="https://ulems.my.id/assets/images/icon-192x192.png">

    <!-- Preconnect CDN -->
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">

    <!-- Preload Resources -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha256-2FMn2Zx6PuH5tdBQDRNwrOo60ts5wWPC9R8jK67b3t4=" crossorigin="anonymous" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css" integrity="sha256-4rTIfo5GQTi/7UJqoyUJQKzxW8VN/YBH31+Cy+vTZj4=" crossorigin="anonymous" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha256-5P1JGBOIxI7FBAvT/mb1fCnI5n/NhQKzNUuW7Hq0fMc=" crossorigin="anonymous" as="script">

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap">

    <!-- Dependencies CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" integrity="sha256-2FMn2Zx6PuH5tdBQDRNwrOo60ts5wWPC9R8jK67b3t4=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@7.1.0/css/all.min.css" integrity="sha256-4rTIfo5GQTi/7UJqoyUJQKzxW8VN/YBH31+Cy+vTZj4=" crossorigin="anonymous">
    

    <!-- Dependencies JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha256-5P1JGBOIxI7FBAvT/mb1fCnI5n/NhQKzNUuW7Hq0fMc=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   
</head>

<style>
    html {
    scrollbar-width: none !important;
    -ms-overflow-style: none !important;
}

.with-scrollbar {
    scrollbar-width: auto !important;
    -ms-overflow-style: auto !important;
}

.font-esthetic {
    font-family: 'Sacramento', cursive !important;
}

.font-arabic {
    font-family: 'Noto Naskh Arabic', serif !important;
}

.img-center-crop {
    width: 13rem;
    height: 13rem;
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
}

html[data-bs-theme="dark"] .btn-transparent {
    background-color: rgba(var(--bs-dark-rgb), 0.5) !important;
    backdrop-filter: blur(0.5rem);
}

html[data-bs-theme="light"] .btn-transparent {
    background-color: rgba(var(--bs-light-rgb), 0.5) !important;
    backdrop-filter: blur(0.5rem);
}

.loading-page {
    position: fixed;
    inset: 0;
    width: 100%;
    height: 100%;
    z-index: 1056;
}

html[data-bs-theme="light"] .color-theme-svg {
    color: rgb(255, 255, 255);
    background-color: var(--bs-light);
}

html[data-bs-theme="dark"] .color-theme-svg {
    color: rgb(0, 0, 0);
    background-color: var(--bs-dark);
}

html[data-bs-theme="light"] .bg-light-dark {
    background-color: rgb(var(--bs-light-rgb));
}

html[data-bs-theme="dark"] .bg-light-dark {
    background-color: rgb(var(--bs-dark-rgb));
}

html[data-bs-theme="light"] .bg-white-black {
    background-color: rgb(var(--bs-white-rgb));
}

html[data-bs-theme="dark"] .bg-white-black {
    background-color: rgb(var(--bs-black-rgb));
}

.bg-cover-home {
    width: 100%;
    height: 100%;
    object-fit: cover;
    mask-image: linear-gradient(0.5turn, transparent, black 40%, black 60%, transparent);
}

.width-loading {
    width: 25%;
}

.cursor-pointer {
    cursor: pointer;
}

@media screen and (max-width: 992px) {
    .width-loading {
        width: 50%;
    }
}

@media screen and (max-width: 576px) {
    .width-loading {
        width: 75%;
    }
}

svg {
    display: block;
    line-height: 0;
    shape-rendering: geometricPrecision;
    backface-visibility: hidden;
}

.svg-wrapper {
    overflow: hidden !important;
    transform: translateZ(0) !important;
}

.no-gap-bottom {
    margin-bottom: -0.75rem !important;
}
@keyframes scroll {
    0% {
        transform: translateY(1rem);
        opacity: 0;
    }

    10% {
        transform: translateY(0);
        opacity: 1;
    }

    100% {
        transform: translateY(0);
        opacity: 0;
    }
}

.mouse-animation>.scroll-animation {
    width: 0.25rem;
    height: 0.625rem;
    animation: scroll 3s linear infinite;
}

.mouse-animation {
    height: 2rem;
    box-sizing: content-box;
}

@keyframes spin-icon {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}

.spin-button {
    animation: spin-icon 5s linear infinite;
}

@keyframes love {
    50% {
        transform: translateY(1rem);
    }
}

.animate-love {
    animation: love 5s ease-in-out infinite;
}

.slide-desktop {
    transform: scale(1);
    transition: transform 10s linear;
}

.slide-desktop-active {
    transform: scale(1.15);
}
html {
    scroll-behavior: smooth !important;
    width: 100vw !important;
}

body {
    font-family: 'Josefin Sans', sans-serif !important;
    padding: 0 !important;
    width: 100% !important;
    overflow-x: hidden !important;
}

i {
    width: auto !important;
}

body,
div,
nav,
svg,
section {
    will-change: background-color;
    transition: background-color 350ms ease;
}

svg>path {
    will-change: color;
    transition: color 350ms ease;
}

html[data-bs-theme="dark"] .navbar {
    background-color: rgba(var(--bs-dark-rgb), 0.75) !important;
    backdrop-filter: blur(0.5rem);
}

html[data-bs-theme="light"] .navbar {
    background-color: rgba(var(--bs-light-rgb), 0.75) !important;
    backdrop-filter: blur(0.5rem);
}

html[data-bs-theme="dark"] .text-theme-auto {
    color: rgb(var(--bs-light-rgb));
}

html[data-bs-theme="light"] .text-theme-auto {
    color: rgb(var(--bs-dark-rgb));
}

html[data-bs-theme="dark"] .nav-link {
    color: rgba(var(--bs-white-rgb), 0.5);
}

html[data-bs-theme="light"] .nav-link {
    color: rgba(var(--bs-black-rgb), 0.5);
}

html[data-bs-theme="dark"] .bg-theme-auto {
    background-color: var(--bs-gray-800);
}

html[data-bs-theme="light"] .bg-theme-auto {
    background-color: var(--bs-gray-100);
}

html[data-bs-theme="dark"] .btn-outline-auto {
    --bs-btn-color: var(--bs-light);
    --bs-btn-border-color: var(--bs-light);
    --bs-btn-hover-color: var(--bs-black);
    --bs-btn-hover-bg: var(--bs-light);
    --bs-btn-hover-border-color: var(--bs-light);
    --bs-btn-focus-shadow-rgb: var(--bs-light-rgb);
    --bs-btn-active-color: var(--bs-black);
    --bs-btn-active-bg: var(--bs-light);
    --bs-btn-active-border-color: var(--bs-light);
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: var(--bs-light);
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: var(--bs-light);
    --bs-gradient: none;
}

html[data-bs-theme="light"] .btn-outline-auto {
    --bs-btn-color: var(--bs-dark);
    --bs-btn-border-color: var(--bs-dark);
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: var(--bs-dark);
    --bs-btn-hover-border-color: var(--bs-dark);
    --bs-btn-focus-shadow-rgb: var(--bs-dark-rgb);
    --bs-btn-active-color: var(--bs-white);
    --bs-btn-active-bg: var(--bs-dark);
    --bs-btn-active-border-color: var(--bs-dark);
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: var(--bs-dark);
    --bs-btn-disabled-bg: transparent;
    --bs-btn-disabled-border-color: var(--bs-dark);
    --bs-gradient: none;
}

html[data-bs-theme="dark"] .bg-overlay-auto {
    background-color: rgba(var(--bs-black-rgb), 0.5);
    backdrop-filter: blur(0.25rem);
}

html[data-bs-theme="light"] .bg-overlay-auto {
    background-color: rgba(var(--bs-white-rgb), 0.5);
    backdrop-filter: blur(0.25rem);
}

.hover-area {
    display: none;
    cursor: pointer;
}

.hover-wrapper:hover .hover-area {
    display: flex;
}

.gif-image {
    max-height: 10rem;
}

/* EFEK BUKA UNDANGAN */
#welcome {
    transition: transform 1s ease-in-out, opacity 1s ease-in-out;
}

/* Class ini akan ditambahkan lewat JS saat tombol diklik */
.slide-up-fade {
    transform: translateY(-100%); /* Geser ke atas */
    opacity: 0; /* Menghilang */
}

/* --- CUSTOM ANIMATION UNTUK SCROLL BOX --- */
/* Kondisi awal: tersembunyi & agak turun */
.story-animate {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease-out; /* Durasi animasi */
}

/* Kondisi akhir: muncul & posisi normal */
.story-animate.show {
    opacity: 1;
    transform: translateY(0);
}

/* --- STYLE KOMENTAR MODERN --- */
#comments {
    max-height: 500px;
    overflow-y: auto;
    padding-right: 5px;
}

/* Scrollbar tipis biar rapi */
#comments::-webkit-scrollbar { width: 4px; }
#comments::-webkit-scrollbar-track { background: #f1f1f1; }
#comments::-webkit-scrollbar-thumb { background: #ccc; border-radius: 10px; }

.comment-card {
    background: #ffffff;
    border-radius: 16px;
    border-bottom-left-radius: 4px; /* Efek Chat Bubble */
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    border: 1px solid rgba(0,0,0,0.03);
    transition: transform 0.2s;
}

.comment-card:hover {
    transform: translateY(-2px);
}

.avatar-circle {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 1.1rem;
    box-shadow: 0 3px 6px rgba(0,0,0,0.1);
}

.comment-name {
    font-size: 0.95rem;
    color: #2c3e50;
}

.comment-date {
    font-size: 0.7rem;
    color: #95a5a6;
}

.comment-body {
    font-size: 0.9rem;
    color: #555;
    line-height: 1.5;
    background: #f8f9fa;
    border-radius: 12px;
}

.badge-hadir {
    font-size: 0.65rem;
    padding: 2px 8px;
    border-radius: 20px;
    background-color: #d1e7dd;
    color: #0f5132;
    border: 1px solid #badbcc;
}

.badge-absen {
    font-size: 0.65rem;
    padding: 2px 8px;
    border-radius: 20px;
    background-color: #f8d7da;
    color: #842029;
    border: 1px solid #f5c2c7;
}

[data-bs-theme="dark"] .comment-card {
    background: #212529; /* Warna kartu jadi gelap (Dark Grey) */
    border: 1px solid #373b3e; /* Garis tepi tipis */
    box-shadow: none; /* Shadow dimatikan biar rapi */
}

[data-bs-theme="dark"] .comment-name {
    color: #f8f9fa; /* Nama jadi Putih Terang */
}

[data-bs-theme="dark"] .comment-date {
    color: #adb5bd; /* Tanggal jadi Abu Terang */
}

[data-bs-theme="dark"] .comment-body {
    background: #111315; /* Bubble chat jadi Hitam Pekat */
    color: #e0e0e0; /* Teks pesan jadi Putih agak abu */
    border: 1px solid #2c3034;
}

[data-bs-theme="dark"] #comments::-webkit-scrollbar-track { 
    background: #212529; 
}
[data-bs-theme="dark"] #comments::-webkit-scrollbar-thumb { 
    background: #495057; 
}
</style>

<body data-key="key-disini" data-url="#" data-audio="<?= $audio ?>" data-confetti="true" data-time="<?= $tgl_acara ?> 08:00:00">

    <!-- Root Invitation -->
    <div class="row m-0 p-0 opacity-0" id="root">

        <!-- Desktop mode -->
        <div class="sticky-top vh-100 d-none d-sm-block col-sm-5 col-md-6 col-lg-7 col-xl-8 col-xxl-9 overflow-y-hidden m-0 p-0">
            <div class="position-relative bg-white-black d-flex justify-content-center align-items-center vh-100">
                <div class="d-flex position-absolute w-100 h-100">
                    <div class="position-relative overflow-hidden vw-100">
                       <div class="position-absolute h-100 w-100 slide-desktop" style="opacity: 0;">
    <img src="<?= $f_cover ?>" data-src="<?= $f_cover ?>" alt="bg" class="bg-cover-home" style="mask-image: none; opacity: 30%;">
</div>
                        <div class="position-absolute h-100 w-100 slide-desktop" style="opacity: 0;">
                            <img src="<?= $f_cover ?>" data-src="<?= $f_cover ?>" alt="bg" class="bg-cover-home" style="mask-image: none; opacity: 30%;">
                        </div>                     
                    </div>
                </div>

                <div class="text-center p-4 bg-overlay-auto rounded-5">
                    <h2 class="font-esthetic mb-4" style="font-size: 2rem;"><?= $pria ?> & <?= $wanita ?></h2>
                    <p class="m-0" style="font-size: 1rem;"><?= $tanggal_indo ?></p>
                </div>
            </div>
        </div>

        <!-- Smartphone mode -->
        <div class="col-sm-7 col-md-6 col-lg-5 col-xl-4 col-xxl-3 m-0 p-0">
            <!-- Main Content -->
            <main data-bs-spy="scroll" data-bs-target="#navbar-menu" data-bs-root-margin="25% 0% 0% 0%" data-bs-smooth-scroll="true" tabindex="0">

                <!-- Home -->
                <section id="home" class="bg-light-dark position-relative overflow-hidden p-0 m-0">
    <img src="<?= $f_cover ?>" data-src="<?= $f_cover ?>" alt="bg" class="position-absolute opacity-25 top-50 start-50 translate-middle bg-cover-home">

    <div class="position-relative text-center bg-overlay-auto" style="background-color: unset;">
        <h1 class="font-esthetic pt-5 pb-4 fw-medium" style="font-size: 2.25rem;">Undangan Pernikahan</h1>

        <img src="<?= $f_cover ?>" data-src="<?= $f_cover ?>" alt="bg" onclick="undangan.guest.modal(this)" class="img-center-crop rounded-circle border border-3 border-light shadow my-4 mx-auto cursor-pointer">

        <h2 class="font-esthetic my-4" style="font-size: 2.25rem;"><?= $pria ?> & <?= $wanita ?></h2>
        <p class="my-2" style="font-size: 1.25rem;"><?= $tanggal_indo ?></p>

        <button class="btn btn-outline-auto btn-sm shadow rounded-pill px-3 py-1" style="font-size: 0.825rem;">
            <i class="fa-solid fa-calendar-check me-2"></i>Save Google Calendar
        </button>

        <div class="d-flex justify-content-center align-items-center mt-4 mb-2">
            <div class="mouse-animation border border-secondary border-2 rounded-5 px-2 py-1 opacity-50">
                <div class="scroll-animation rounded-4 bg-secondary"></div>
            </div>
        </div>

        <p class="pb-4 m-0 text-secondary" style="font-size: 0.825rem;">Scroll Down</p>
    </div>
</section>

                <!-- Wave Separator -->
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="color-theme-svg no-gap-bottom">
                        <path fill="currentColor" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,106.7C384,117,480,171,576,165.3C672,160,768,96,864,96C960,96,1056,160,1152,154.7C1248,149,1344,75,1392,37.3L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                    </svg>
                </div>

                <!-- Bride -->
                <section class="bg-white-black text-center" id="bride">
                    <h2 class="font-arabic py-4 m-0" style="font-size: 2rem;">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</h2>
                    <h2 class="font-esthetic py-4 m-0" style="font-size: 2rem;">Assalamualaikum Warahmatullahi Wabarakatuh</h2>
                    <p class="pb-4 px-2 m-0" style="font-size: 0.95rem;">Tanpa mengurangi rasa hormat, kami mengundang Anda untuk berkenan menghadiri acara pernikahan kami:</p>

                    <div class="overflow-x-hidden pb-4">

                        <div class="position-relative">
                            <!-- Love animation -->
                            <div class="position-absolute" style="top: 0%; right: 5%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="opacity-50" data-time="500" data-class="animate-love" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                </svg>
                            </div>

                            <div data-aos="fade-right" data-aos-duration="2000" class="pb-1">
    <img src="<?= $f_pria ?>" data-src="<?= $f_pria ?>" alt="cowo" onclick="undangan.guest.modal(this)" class="img-center-crop rounded-circle border border-3 border-light shadow my-4 mx-auto cursor-pointer">
    
    <h2 class="font-esthetic m-0" style="font-size: 2.125rem;"><?= $pria ?></h2>
    <p class="mt-3 mb-1" style="font-size: 1.25rem;"><?= $ortu_pria ?></p>
</div>

                            <!-- Love animation -->
                            <div class="position-absolute" style="top: 70%; left: 5%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="opacity-50" data-time="2000" data-class="animate-love" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                </svg>
                            </div>
                        </div>

                        <h2 class="font-esthetic mt-4" style="font-size: 4.5rem;">&amp;</h2>

                        <div class="position-relative">
                            <!-- Love animation -->
                            <div class="position-absolute" style="top: 0%; right: 5%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="opacity-50" data-time="3000" data-class="animate-love" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                </svg>
                            </div>

                            <div data-aos="fade-left" data-aos-duration="2000" class="pb-1">
    <img src="<?= $f_wanita ?>" data-src="<?= $f_wanita ?>" alt="cewe" onclick="undangan.guest.modal(this)" class="img-center-crop rounded-circle border border-3 border-light shadow my-4 mx-auto cursor-pointer">
    
    <h2 class="font-esthetic m-0" style="font-size: 2.125rem;"><?= $wanita ?></h2>
    <p class="mt-3 mb-1" style="font-size: 1.25rem;"><?= $ortu_wanita ?></p>
</div>

                            <!-- Love animation -->
                            <div class="position-absolute" style="top: 70%; left: 5%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="opacity-50" data-time="2500" data-class="animate-love" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Wave Separator -->
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="color-theme-svg no-gap-bottom">
                        <path fill="currentColor" fill-opacity="1" d="M0,192L40,181.3C80,171,160,149,240,149.3C320,149,400,171,480,165.3C560,160,640,128,720,128C800,128,880,160,960,186.7C1040,213,1120,235,1200,218.7C1280,203,1360,149,1400,122.7L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
                    </svg>
                </div>

                <!-- Firman Allah Subhanahu Wa Ta'ala -->
                <section class="bg-light-dark pt-2 pb-4">
                    <div class="container text-center">
                        <h2 class="font-esthetic pt-2 pb-1 m-0" style="font-size: 2rem;">Allah Subhanahu Wa Ta'ala berfirman</h2>

                        <div class="bg-theme-auto mt-4 p-3 shadow rounded-4" data-aos="fade-down" data-aos-duration="2000">
                            <p class="p-1 mb-2" style="font-size: 0.95rem;">Dan segala sesuatu Kami ciptakan berpasang-pasangan agar kamu mengingat (kebesaran Allah).</p>
                            <p class="m-0 p-0 text-theme-auto" style="font-size: 0.95rem;">QS. Adh-Dhariyat: 49</p>
                        </div>

                        <div class="bg-theme-auto mt-4 p-3 shadow rounded-4" data-aos="fade-down" data-aos-duration="2000">
                            <p class="p-1 mb-2" style="font-size: 0.95rem;">dan sesungguhnya Dialah yang menciptakan pasangan laki-laki dan perempuan,</p>
                            <p class="m-0 p-0 text-theme-auto" style="font-size: 0.95rem;">QS. An-Najm: 45</p>
                        </div>
                    </div>
                </section>

                 <section class="bg-light-dark pt-2 pb-4">
    <div class="container">
        <div class="bg-theme-auto rounded-5 shadow p-3">
            <h2 class="font-esthetic text-center py-2 mb-2" style="font-size: 2.125rem;">Kisah Cinta</h2>

            <div class="position-relative mt-3">
                
                <div class="p-2">
                    
                    <?php 
                    // CEK DATA
                    if(isset($stories) && $stories->num_rows > 0): 
                        $no_story = 1;
                        while($s = $stories->fetch_assoc()):
                            $img_story = "assets/uploads/" . $klien['slug'] . "/" . $s['gambar'];
                    ?>
                    
                    <div class="row">
                        <div class="col-auto position-relative">
                            <p class="position-relative d-flex justify-content-center align-items-center bg-theme-auto border border-secondary border-2 opacity-100 rounded-circle m-0 p-0 z-1" style="width: 2rem; height: 2rem;"><?= $no_story++ ?></p>
                            <hr class="position-absolute top-0 start-50 translate-middle-x border border-secondary h-100 z-0 opacity-100 m-0 rounded-4 shadow-none">
                        </div>
                        
                        <div class="col mt-1 mb-3 ps-0" data-aos="fade-up" data-aos-duration="1000"> 
                            
                            <div class="mb-2">
                                <img src="<?= $img_story ?>" 
                                     class="img-fluid rounded-4 shadow-sm cursor-pointer w-100" 
                                     onclick="undangan.guest.modal(this)" 
                                     style="height: 200px; object-fit: cover; min-height: 200px; background-color: #eee;"
                                     alt="Foto Cerita">
                            </div>
                            
                            <p class="fw-bold mb-1"><?= $s['judul'] ?></p>
                            <p class="small mb-0 text-break"><?= nl2br($s['cerita']) ?></p>
                        </div>
                    </div>

                    <?php endwhile; else: ?>
                        <div class="text-center text-muted small py-5">Belum ada cerita yang ditambahkan.</div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

                <!-- Wave Separator -->
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="color-theme-svg no-gap-bottom">
                        <path fill="currentColor" fill-opacity="1" d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
                    </svg>
                </div>

                <!-- Wedding Date -->
                <section class="bg-white-black pb-2" id="wedding-date">
                    <div class="container text-center">
                        <h2 class="font-esthetic py-4 m-0" style="font-size: 2.25rem;">Moment Bahagia</h2>

                        <div class="border rounded-pill shadow py-2 px-4 mt-2 mb-4">
                            <div class="row justify-content-center">
                                <div class="col-3 p-1">
                                    <p class="d-inline m-0 p-0" style="font-size: 1.25rem;" id="day">0</p><small class="ms-1 me-0 my-0 p-0 d-inline">Hari</small>
                                </div>
                                <div class="col-3 p-1">
                                    <p class="d-inline m-0 p-0" style="font-size: 1.25rem;" id="hour">0</p><small class="ms-1 me-0 my-0 p-0 d-inline">Jam</small>
                                </div>
                                <div class="col-3 p-1">
                                    <p class="d-inline m-0 p-0" style="font-size: 1.25rem;" id="minute">0</p><small class="ms-1 me-0 my-0 p-0 d-inline">Menit</small>
                                </div>
                                <div class="col-3 p-1">
                                    <p class="d-inline m-0 p-0" style="font-size: 1.25rem;" id="second">0</p><small class="ms-1 me-0 my-0 p-0 d-inline">Detik</small>
                                </div>
                            </div>
                        </div>

                        <p class="py-2 m-0" style="font-size: 0.95rem;">Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, insyaAllah kami akan menyelenggarakan acara:</p>

                        <!-- Love animation -->
                        <div class="position-relative">
                            <div class="position-absolute" style="top: 0%; right: 5%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="opacity-50" data-time="3000" data-class="animate-love" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                </svg>
                            </div>
                        </div>

                        <div class="overflow-x-hidden">
    <div class="py-2" data-aos="fade-right" data-aos-duration="1500">
        <h2 class="font-esthetic m-0 py-2" style="font-size: 2rem;"><?= $acara1_nama ?></h2>
        <p style="font-size: 0.95rem;"><?= $acara1_waktu ?></p>
    </div>

    <div class="py-2" data-aos="fade-left" data-aos-duration="1500">
        <h2 class="font-esthetic m-0 py-2" style="font-size: 2rem;"><?= $acara2_nama ?></h2>
        <p style="font-size: 0.95rem;"><?= $acara2_waktu ?></p>
    </div>
</div>

                        <p class="py-2 m-0" style="font-size: 0.95rem;">Demi kehangatan bersama, kami memohon kesediaan Anda untuk mengenakan dress code berikut:</p>

                        <!-- Love animation -->
                        <div class="position-relative">
                            <div class="position-absolute" style="top: 0%; left: 5%;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="opacity-50" data-time="2000" data-class="animate-love" viewBox="0 0 16 16">
                                    <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                </svg>
                            </div>
                        </div>

                        <div class="py-2" data-aos="fade-down" data-aos-duration="1500">
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <div class="shadow rounded-circle border border-secondary" style="width: 3rem; height: 3rem; background-color: white;"></div>
                                <div class="shadow rounded-circle border border-secondary" style="width: 3rem; height: 3rem; background-color: aquamarine; margin-left: -1rem;"></div>
                                <div class="shadow rounded-circle border border-secondary" style="width: 3rem; height: 3rem; background-color: limegreen; margin-left: -1rem;"></div>
                            </div>
                            <p style="font-size: 0.95rem;">Busana batik dan bersepatu.</p>
                        </div>

                        <div class="py-2" data-aos="fade-down" data-aos-duration="1500">
                           <?php if(!empty($maps)): ?>
    <a href="<?= $maps ?>" target="_blank" class="btn btn-outline-auto btn-sm rounded-pill shadow mb-2 px-3">
        <i class="fa-solid fa-map-location-dot me-2"></i>Lihat Google Maps
    </a>
<?php endif; ?>
                            <small class="d-block my-1"><?= $alamat ?></small>
                        </div>
                    </div>
                </section>

                <!-- Gallery -->
                <style>
    /* CSS Khusus Masonry Gallery */
    .masonry-container {
        column-count: 2; /* Default 2 kolom (HP) */
        column-gap: 15px; /* Jarak antar kolom */
    }
    
    /* Tampilan Desktop jadi 3 kolom */
    @media (min-width: 768px) {
        .masonry-container {
            column-count: 3;
        }
    }

    .masonry-item {
        break-inside: avoid; /* Mencegah gambar terpotong */
        margin-bottom: 15px; /* Jarak bawah */
        position: relative;
        overflow: hidden;
        border-radius: 12px; /* Rounded mirip contoh */
        transition: transform 0.3s ease;
    }

    .masonry-item img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }

    /* Efek Hover (Optional) */
    .masonry-item:hover {
        transform: scale(1.02);
        cursor: pointer;
    }
</style>

<section class="bg-white-black pb-5 pt-3" id="gallery">
    <div class="container">
        <div class="border rounded-5 shadow p-3 bg-theme-auto">

            <h2 class="font-esthetic text-center py-2 m-0 mb-4" style="font-size: 2.25rem;">Galeri</h2>

            <?php if(isset($gallery) && $gallery->num_rows > 0): ?>
            
            <div class="masonry-container" data-aos="fade-up" data-aos-duration="1500">
                <?php 
                // Reset pointer query agar loop dari awal
                $gallery->data_seek(0); 
                while($g = $gallery->fetch_assoc()):
                    // Path Foto
                    $img_src = "assets/uploads/" . $klien['slug'] . "/" . $g['gambar'];
                ?>
                
                <div class="masonry-item shadow-sm">
                    <img src="<?= $img_src ?>" 
                         alt="Gallery Image" 
                         loading="lazy"
                         onclick="undangan.guest.modal(this)">
                </div>

                <?php endwhile; ?>
            </div>
            <?php else: ?>
                <div class="text-center py-5 text-muted">
                    <i class="fa-regular fa-images fa-3x mb-3 opacity-50"></i>
                    <p class="m-0">Galeri foto belum tersedia.</p>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>

                <!-- Wave Separator -->
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="color-theme-svg no-gap-bottom">
                        <path fill="currentColor" fill-opacity="1" d="M0,96L30,106.7C60,117,120,139,180,154.7C240,171,300,181,360,186.7C420,192,480,192,540,181.3C600,171,660,149,720,154.7C780,160,840,192,900,208C960,224,1020,224,1080,208C1140,192,1200,160,1260,138.7C1320,117,1380,107,1410,101.3L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
                    </svg>
                </div>

                <!-- Love Gift -->
                <section class="bg-light-dark pb-3">
    <div class="container text-center">
        <h2 class="font-esthetic pt-3 mb-4" style="font-size: 2.25rem;">Love Gift</h2>
        <p class="mb-1" style="font-size: 0.95rem;">Dengan hormat, bagi Anda yang ingin memberikan tanda kasih kepada kami, dapat melalui:</p>

        <div class="bg-theme-auto rounded-4 shadow p-3 mx-4 mt-4 text-start" data-aos="fade-up" data-aos-duration="2500">
            <i class="fa-solid fa-money-bill-transfer fa-lg"></i>
            <p class="d-inline fw-bold ms-2">Transfer Bank</p>

            <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="m-0 p-0" style="font-size: 0.95rem;"><i class="fa-regular fa-user fa-sm me-1"></i><?= $bank_an ?></p>
                <button class="btn btn-outline-auto btn-sm shadow-sm rounded-4 py-0" style="font-size: 0.75rem;" data-bs-toggle="collapse" data-bs-target="#collapseTf"><i class="fa-solid fa-circle-info fa-sm me-1"></i>Info</button>
            </div>

            <div class="collapse show" id="collapseTf">
                <hr class="my-2 py-1">
                <p class="m-0 fw-bold" style="font-size: 0.9rem;"><i class="fa-solid fa-building-columns me-1"></i><?= $bank_nama ?></p>
                <div class="d-flex justify-content-between align-items-center mt-2">
                    <p class="m-0 p-0 fs-5 font-monospace" style="letter-spacing: 1px;"><?= $rekening ?></p>
                    <button class="btn btn-outline-auto btn-sm shadow-sm rounded-4 py-0" style="font-size: 0.75rem;" data-copy="<?= $rekening ?>" onclick="undangan.util.copy(this)">
                        <i class="fa-solid fa-copy me-1"></i>Salin
                    </button>
                </div>
            </div>
        </div>

        <div class="bg-theme-auto rounded-4 shadow p-3 mx-4 mt-4 text-start" data-aos="fade-up" data-aos-duration="2500">
            <i class="fa-solid fa-qrcode fa-lg"></i>
            <p class="d-inline fw-bold ms-2">QRIS Payment</p>

            <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="m-0 p-0" style="font-size: 0.95rem;">Scan Barcode</p>
                <button class="btn btn-outline-auto btn-sm shadow-sm rounded-4 py-0" style="font-size: 0.75rem;" data-bs-toggle="collapse" data-bs-target="#collapseQris"><i class="fa-solid fa-eye fa-sm me-1"></i>Lihat</button>
            </div>

            <div class="collapse" id="collapseQris">
                <hr class="my-2 py-1">
                <div class="d-flex justify-content-center align-items-center bg-white rounded p-2">
                    <img src="<?= $qris_img ?>" alt="QRIS Code" class="img-fluid rounded" style="max-height: 250px;">
                </div>
                <small class="text-muted d-block text-center mt-1">Scan menggunakan e-Wallet / M-Banking</small>
            </div>
        </div>

        <div class="bg-theme-auto rounded-4 shadow p-3 mx-4 mt-4 text-start" data-aos="fade-up" data-aos-duration="2500">
            <i class="fa-solid fa-gift fa-lg"></i>
            <p class="d-inline fw-bold ms-2">Kirim Kado</p>

            <div class="d-flex justify-content-between align-items-center mt-2">
                <p class="m-0 p-0" style="font-size: 0.95rem;">Alamat Pengiriman</p>
                <button class="btn btn-outline-auto btn-sm shadow-sm rounded-4 py-0" style="font-size: 0.75rem;" data-bs-toggle="collapse" data-bs-target="#collapseGift"><i class="fa-solid fa-circle-info fa-sm me-1"></i>Info</button>
            </div>

            <div class="collapse" id="collapseGift">
                <hr class="my-2 py-1">
                
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <p class="m-0 p-0" style="font-size: 0.85rem;"><i class="fa-brands fa-whatsapp me-1 text-success"></i><?= $gift_nohp ?></p>
                    <button class="btn btn-outline-auto btn-sm shadow-sm rounded-4 py-0" style="font-size: 0.75rem;" data-copy="<?= $gift_nohp ?>" onclick="undangan.util.copy(this)"><i class="fa-solid fa-copy"></i></button>
                </div>
                
                <div class="d-flex justify-content-between align-items-start">
                    <p class="my-0 p-0 me-2 small text-muted" style="line-height: 1.4;">
                        <i class="fa-solid fa-location-dot me-1 text-danger"></i><?= $gift_alamat ?>
                    </p>
                    <button class="btn btn-outline-auto btn-sm shadow-sm rounded-4 py-0 flex-shrink-0" style="font-size: 0.75rem;" data-copy="<?= $gift_alamat ?>" onclick="undangan.util.copy(this)">
                        <i class="fa-solid fa-copy"></i>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>

                <!-- Comment -->
                <section class="bg-light-dark my-0 pb-0 pt-3" id="comment">
                    <div class="container">
                        <div class="border rounded-5 shadow p-3 mb-2">
                            <h2 class="font-esthetic text-center mt-2 mb-4" style="font-size: 2.25rem;">Ucapan &amp; Doa</h2>

                            <div class="mb-3">
    <label for="form-name" class="form-label my-1"><i class="fa-solid fa-person me-2"></i>Nama</label>
    <input dir="auto" type="text" class="form-control shadow-sm rounded-4" id="form-name" minlength="2" maxlength="50" placeholder="Isikan Nama Anda" autocomplete="name" data-offline-disabled="false">
</div>

                            <div class="mb-3">
                                <label for="form-presence" class="form-label my-1"><i class="fa-solid fa-person-circle-question me-2"></i>Presensi</label>
                                <select class="form-select shadow-sm rounded-4" id="form-presence" autocomplete="off" data-offline-disabled="false">
                                    <option value="0" selected>Konfirmasi Presensi</option>
                                    <option value="1">&#9989; Datang</option>
                                    <option value="2">&#10060; Berhalangan</option>
                                </select>
                            </div>

                            <div class="d-block mb-3" id="comment-form-default">
                                

                                <label for="form-comment" class="form-label my-1"><i class="fa-solid fa-comment me-2"></i>Ucapan &amp; Doa</label>
                                <div class="position-relative">
                                    <button class="btn btn-secondary btn-sm rounded-4 shadow-sm me-1 my-1 position-absolute bottom-0 end-0" onclick="undangan.comment.gif.open(undangan.comment.gif.default)" aria-label="button gif" data-offline-disabled="false"><i class="fa-solid fa-photo-film"></i></button>
                                    <textarea dir="auto" class="form-control shadow-sm rounded-4" id="form-comment" rows="4" minlength="1" maxlength="1000" placeholder="Tulis Ucapan dan Doa" autocomplete="off" data-offline-disabled="false"></textarea>
                                </div>
                            </div>

                            <div class="d-none mb-3" id="gif-form-default"></div>

                            <div class="d-grid">
                                <button class="btn btn-primary btn-sm rounded-4 shadow m-1" onclick="undangan.comment.send(this)" data-offline-disabled="false">
    <i class="fa-solid fa-paper-plane me-2"></i>Send
</button>
                            </div>
                        </div>

                        <!-- Comments -->
                        <div class="py-3" id="comments" data-loading="false"></div>

                        <!-- Pagination -->
                        <nav class="d-f mt-1 mb-0" id="pagination"></nav>
                    </div>
                </section>

                <!-- Wave Separator -->
                <div class="svg-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="color-theme-svg no-gap-bottom">
                        <path fill="currentColor" fill-opacity="1" d="M0,224L34.3,234.7C68.6,245,137,267,206,266.7C274.3,267,343,245,411,234.7C480,224,549,224,617,213.3C685.7,203,754,181,823,197.3C891.4,213,960,267,1029,266.7C1097.1,267,1166,213,1234,192C1302.9,171,1371,181,1406,186.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
lex d-none justify-content-center                    </svg>
                </div>

                <!-- End Of Invitation -->
                <section class="bg-white-black py-2 no-gap-bottom">
                    <div class="container text-center">
                        <p class="pb-2 pt-4" style="font-size: 0.95rem;">Terima kasih atas perhatian dan doa restu Anda, yang menjadi kebahagiaan serta kehormatan besar bagi kami.</p>

                        <h2 class="font-esthetic" style="font-size: 2rem;">Wassalamualaikum Warahmatullahi Wabarakatuh</h2>
                        <h2 class="font-arabic pt-4" style="font-size: 2rem;">اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ</h2>

                        <hr class="my-3">

                        <div class="row align-items-center justify-content-between flex-column pb-3">
                            <div class="col-auto">
                                <small>Build with<i class="fa-solid fa-heart mx-1"></i>Keabadian Kita dimulai</small>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </main>

            <!-- Navbar Bottom -->
            <nav class="navbar navbar-expand sticky-bottom rounded-top-4 border-top p-0" id="navbar-menu">
                <ul class="navbar-nav nav-justified w-100 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">
                            <i class="fa-solid fa-house"></i>
                            <span class="d-block" style="font-size: 0.7rem;">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#bride">
                            <i class="fa-solid fa-user-group"></i>
                            <span class="d-block" style="font-size: 0.7rem;">Mempelai</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wedding-date">
                            <i class="fa-solid fa-calendar-check"></i>
                            <span class="d-block" style="font-size: 0.7rem;">Tanggal</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">
                            <i class="fa-solid fa-images"></i>
                            <span class="d-block" style="font-size: 0.7rem;">Galeri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#comment">
                            <i class="fa-solid fa-comments"></i>
                            <span class="d-block" style="font-size: 0.7rem;">Ucapan</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Welcome Page -->
    <div class="loading-page bg-white-black" id="welcome" style="opacity: 0;">
    <div class="d-flex justify-content-center align-items-center vh-100 w-100 overflow-y-auto">
        <div class="d-flex flex-column text-center">
            <h2 class="font-esthetic mb-4" style="font-size: 2.25rem;">The Wedding Of</h2>

            <img src="<?= $f_cover ?>" data-src="<?= $f_cover ?>" alt="background" class="img-center-crop rounded-circle border border-3 border-light shadow mb-4 mx-auto">

            <h2 class="font-esthetic mb-4" style="font-size: 2.25rem;"><?= $pria ?> & <?= $wanita ?></h2>
            <div id="guest-name" data-message="Kepada Yth Bapak/Ibu/Saudara/i"></div>

            <button type="button" class="btn btn-light shadow rounded-4 mt-3 mx-auto" onclick="undangan.guest.open(this)">
                <i class="fa-solid fa-envelope-open fa-bounce me-2"></i>Open Invitation
            </button>
        </div>
    </div>
</div>

    <!-- Button Group -->
    <div class="d-flex position-fixed flex-column" style="bottom: 10vh; right: 2vh; z-index: 1030;">
        <!-- Theme Button -->
        <button type="button" id="button-theme" class="btn bg-light-dark border btn-sm rounded-circle d-none btn-transparent shadow-sm mt-3" aria-label="Change theme" onclick="undangan.theme.change()">
            <i class="fa-solid fa-circle-half-stroke"></i>
        </button>

        <!-- Audio Button -->
        <button type="button" id="button-music" class="btn bg-light-dark border btn-sm rounded-circle d-none btn-transparent shadow-sm mt-3" aria-label="Change audio" data-offline-disabled="false">
            <i class="fa-solid fa-circle-pause spin-button"></i>
        </button>
    </div>

    <!-- Loading Page -->
    <div class="loading-page bg-white-black" id="loading" style="opacity: 1;">
        <div class="d-flex justify-content-center align-items-center vh-100 overflow-y-auto">
            <div class="d-flex flex-column width-loading text-center">
                <img src="./assets/images/placeholder.webp" data-src="./assets/images/icon-192x192.png" fetchpriority="high" class="img-fluid mb-3 mx-auto object-fit-cover opacity-0" alt="icon" style="width: 3.5rem; height: 3.5rem;">
                <div class="progress" role="progressbar" style="height: 0.5rem;" aria-label="progress bar">
                    <div class="progress-bar" id="progress-bar" style="width: 0%"></div>
                </div>
                <small class="d-none mt-1 text-theme-auto" id="progress-info" style="font-size: 0.8rem;">loading...</small>
                <noscript>
                    <small class="mt-1 text-danger">Sorry, this invitation requires javascript to work</small>
                </noscript>
            </div>
        </div>
        <div class="text-center position-fixed w-100" style="bottom: 8%; left: 0;">
            <div class="d-flex flex-column">
                <small class="text-secondary">by</small>
                <small class="text-theme-auto"></i>OurForeverBegins</small>
            </div>
        </div>
    </div>

    <!-- Modal Image -->
    <div class="modal fade" id="modal-image" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border border-0">
                <div class="modal-body p-0">
                    <div class="d-flex position-absolute top-0 end-0">
                        <a class="btn d-flex justify-content-center align-items-center bg-overlay-auto p-2 m-1 rounded-circle border shadow-sm z-1" role="button" target="_blank" href="./assets/images/placeholder.webp" id="button-modal-click">
                            <i class="fa-solid fa-arrow-up-right-from-square" style="width: 1em !important;"></i>
                        </a>
                        <button class="btn d-flex justify-content-center align-items-center bg-overlay-auto p-2 m-1 rounded-circle border shadow-sm z-1" id="button-modal-download">
                            <i class="fa-solid fa-download" style="width: 1em !important;"></i>
                        </button>
                        <button class="btn d-flex justify-content-center align-items-center bg-overlay-auto p-2 m-1 rounded-circle border shadow-sm z-1" data-bs-dismiss="modal">
                            <i class="fa-solid fa-circle-xmark" style="width: 1em !important;"></i>
                        </button>
                    </div>

                    <img src="./assets/images/placeholder.webp" class="img-fluid w-100 rounded-4 cursor-pointer" alt="image" id="show-modal-image">
                </div>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</body>

</html>
<script>
    /**
     * THE ULTIMATE WEDDING SCRIPT (VERSION: COMPLETE FEATURES)
     * Added: showStory logic
     */

    // --- 1. KONFIGURASI ---
    const config = {
    audioFile: document.body.getAttribute('data-audio') || './assets/music/bg-music.mp3',
    // Ambil tanggal dari PHP, set jam 08:00 pagi
    targetDate: '<?= $tgl_acara ?> 08:00:00' 
};

    // --- 2. MODUL UTAMA ---
    
    // Helper sederhana
    const util = {
        escapeHtml: (text) => {
            if (!text) return text;
            return text.replace(/[&<>"']/g, function(m) {
                return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m];
            });
        },
        copy: (btn) => {
            const text = btn.getAttribute('data-copy');
            navigator.clipboard.writeText(text);
            const icon = btn.innerHTML;
            btn.innerHTML = '<i class="fa-solid fa-check"></i>';
            setTimeout(() => btn.innerHTML = icon, 1500);
            alert('Berhasil disalin: ' + text);
        },
        changeOpacity: (el, show) => {
            return new Promise((resolve) => {
                if (!el) return resolve();
                el.style.transition = 'opacity 1s';
                el.style.opacity = show ? '1' : '0';
                setTimeout(() => resolve(el), 1000);
            });
        }
    };

    const loader = {
        init: function() {
            const progressBar = document.getElementById('progress-bar');
            let width = 0;
            const interval = setInterval(() => {
                if (width >= 100) {
                    clearInterval(interval);
                    
                    const loadingElement = document.getElementById('loading');
                    if(loadingElement) {
                        loadingElement.classList.add('hide');
                        setTimeout(() => {
                            loadingElement.style.display = 'none';
                            
                            const welcomeElement = document.getElementById('welcome');
                            if(welcomeElement) {
                                welcomeElement.style.display = 'flex';
                                setTimeout(() => { welcomeElement.style.opacity = '1'; }, 50);
                            }
                            
                            // --- LOGIKA NAMA TAMU (DISINI UPDATE-NYA) ---
                            const urlParams = new URLSearchParams(window.location.search);
                            const guestName = urlParams.get('to'); // Ambil ?to=Budi
                            const guestContainer = document.getElementById('guest-name');
                            const message = guestContainer ? guestContainer.getAttribute('data-message') : "Kepada Yth";

                            // 1. Update Teks di Cover Depan
                            if(guestContainer) {
                                if(guestName) {
                                    guestContainer.innerHTML = `
                                        <small class="d-block mb-1 text-white-50">${message}</small>
                                        <div class="fs-3 fw-bold font-esthetic text-white">${util.escapeHtml(guestName)}</div>
                                    `;
                                } else {
                                    guestContainer.innerHTML = `
                                        <small class="d-block mb-1 text-white-50">${message}</small>
                                        <div class="fs-3 fw-bold font-esthetic text-white">Tamu Undangan</div>
                                    `;
                                }
                            }

                            // 2. AUTO FILL FORM UCAPAN (INI YANG BARU BANG!)
                            const formNameInput = document.getElementById('form-name');
                            if(formNameInput && guestName) {
                                formNameInput.value = guestName; // Otomatis isi nama di form
                                // Opsional: Bikin readonly biar gak bisa diubah (kalau mau)
                                // formNameInput.readOnly = true; 
                            }
                            // ---------------------------------------------

                        }, 500);
                    }
                } else {
                    width++;
                    if(progressBar) progressBar.style.width = width + '%';
                }
            }, 20); 
        }
    };

    const guest = {
        open: function(btn) {
    // 1. Ubah tombol jadi loading biar user tau ada proses
    btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin me-2"></i> Membuka...';
    
    // 2. Putar Musik
    audio.play();

    // 3. Ambil Elemen
    const welcomeEl = document.getElementById('welcome');
    const rootEl = document.getElementById('root');

    // 4. Tambahkan Class Animasi ke Cover Depan (Slide Up)
    if(welcomeEl) {
        welcomeEl.classList.add('slide-up-fade');
        
        // Tunggu animasi selesai (1 detik) baru hilangkan dari layar (display:none)
        setTimeout(() => { 
            welcomeEl.style.display = 'none'; 
        }, 1000);
    }

    // 5. Munculkan Isi Undangan
    if(rootEl) {
        rootEl.classList.remove('opacity-0');
        // Kasih delay dikit biar smooth pas cover naik
        setTimeout(() => { rootEl.style.opacity = '1'; }, 500);
    }

    // 6. Munculkan Tombol Floating (Musik & Tema)
    const btnTheme = document.getElementById('button-theme');
    const btnMusic = document.getElementById('button-music');
    if(btnTheme) btnTheme.classList.remove('d-none');
    if(btnMusic) btnMusic.classList.remove('d-none');

    // 7. Jalankan Animasi AOS (Scroll Effect)
    if(typeof AOS !== 'undefined') {
        setTimeout(() => { 
            AOS.init({
                duration: 1000, // Durasi animasi elemen 1 detik
                once: true // Animasi cuma sekali mainnya
            }); 
        }, 800); // Delay dikit nunggu cover ilang
    }
    
    // 8. Mulai Slideshow Background
    slideshow.start();
},
        
        modal: function(img) {
            const modalImg = document.getElementById('show-modal-image');
            const modalEl = document.getElementById('modal-image');
            if(modalImg && modalEl) {
                modalImg.src = img.getAttribute('data-src') || img.src;
                const myModal = new bootstrap.Modal(modalEl);
                myModal.show();
            }
        },

        // --- INI FUNGSI YANG KEMARIN HILANG ---
        showStory: function(element) {
            // Element adalah div pembungkus tombol
            // Kita hilangkan div itu supaya teks di bawahnya kelihatan
            element.style.transition = 'opacity 0.5s ease';
            element.style.opacity = '0';
            setTimeout(() => {
                element.style.display = 'none';
            }, 500);
        },

        closeInformation: function() {
            const infoAlert = document.getElementById('information');
            if(infoAlert) infoAlert.style.display = 'none';
        }
    };

    const audio = {
        element: new Audio(config.audioFile),
        isPlaying: false,
        btn: document.getElementById('button-music'),
        
        // Fungsi untuk Memulai Musik (Dipanggil saat tombol "Open Invitation" diklik)
        play: function() {
            this.element.loop = true; // Biar lagunya ngulang terus
            this.element.play()
                .then(() => {
                    this.isPlaying = true;
                    this.updateIcon();
                })
                .catch(e => console.log("Autoplay ditahan browser (wajar), nunggu user interaksi"));
        },
        
        // Fungsi Toggle (Dipanggil saat tombol Music diklik)
        toggle: function() {
            if (this.isPlaying) {
                this.element.pause();
            } else {
                this.element.play();
            }
            this.isPlaying = !this.isPlaying;
            this.updateIcon();
        },
        
        // Fungsi Ganti Icon (Muter atau Diam)
        updateIcon: function() {
            // Ambil ulang elemen tombol biar aman
            const btn = document.getElementById('button-music');
            if(!btn) return;
            
            const icon = btn.querySelector('i');
            if (this.isPlaying) {
                // Kalau lagi main: Icon Pause & Muter
                icon.className = 'fa-solid fa-circle-pause spin-button';
            } else {
                // Kalau stop: Icon Play & Diam
                icon.className = 'fa-solid fa-circle-play';
            }
        }
    };

    const theme = {
        init: function() {
            // Auto detect theme saat pertama load
            const html = document.documentElement;
            if(html.getAttribute('data-bs-theme') === 'auto') {
                const isDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
                html.setAttribute('data-bs-theme', isDark ? 'dark' : 'light');
            }
        },
        toggle: function() {
            const html = document.documentElement;
            const isDark = html.getAttribute('data-bs-theme') === 'dark';
            html.setAttribute('data-bs-theme', isDark ? 'light' : 'dark');
            
            const icon = document.querySelector('#button-theme i');
            if(icon) {
                icon.className = isDark ? 'fa-solid fa-sun' : 'fa-solid fa-moon';
            }
        },
        change: function() { this.toggle(); }
    };

    const countdown = {
        init: function() {
            let timeString = config.targetDate;
            if(!timeString) return; 
            const targetDate = new Date(timeString).getTime();
            
            const d = document.getElementById('day');
            const h = document.getElementById('hour');
            const m = document.getElementById('minute');
            const s = document.getElementById('second');
            
            if(!d) return;

            setInterval(() => {
                const now = new Date().getTime();
                const distance = targetDate - now;

                if (distance < 0) {
                    d.innerText = 0; h.innerText = 0; m.innerText = 0; s.innerText = 0;
                    return;
                }

                d.innerText = Math.floor(distance / (1000 * 60 * 60 * 24)).toString().padStart(2, '0');
                h.innerText = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString().padStart(2, '0');
                m.innerText = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)).toString().padStart(2, '0');
                s.innerText = Math.floor((distance % (1000 * 60)) / 1000).toString().padStart(2, '0');
            }, 1000);
        }
    };

    const slideshow = {
        start: function() {
            const slides = document.querySelectorAll('.slide-desktop');
            let i = 0;
            if(slides.length > 0) {
                slides[0].style.opacity = '1'; // Pastikan gambar pertama muncul
                setInterval(() => {
                    slides[i].style.opacity = '0';
                    i = (i + 1) % slides.length;
                    slides[i].style.opacity = '1';
                }, 5000);
            }
        }
    };

    // Jembatan Kompatibilitas
    // --- 3. JEMBATAN KE PHP NATIVE ---
    const undangan = {
        guest: guest,
        theme: theme,
        audio: audio,
        util: util,
        comment: {
          // FUNGSI LOAD KOMENTAR (MODERN CHAT STYLE)
load: function() {
    const box = document.getElementById('comments');
    
    // Loading State
    box.innerHTML = '<div class="text-center py-3"><i class="fa-solid fa-spinner fa-spin text-primary"></i> Memuat ucapan...</div>';

    fetch(`api/tampil.php?client_id=<?= $id_klien ?>`)
    .then(response => response.json())
    .then(data => {
        box.innerHTML = ''; 
        
        // Kalo Kosong
        if(data.length === 0) {
            box.innerHTML = `<div class="text-center py-5 text-muted small">
                <i class="fa-regular fa-comments fa-2x mb-2 opacity-25"></i><br>
                Belum ada ucapan. Jadilah yang pertama!
            </div>`;
            return;
        }

        // Loop Data
        data.forEach(item => {
            // 1. Logic Warna Avatar (Random tapi konsisten per nama)
            const colors = ['#FF6B6B', '#4ECDC4', '#45B7D1', '#96CEB4', '#FFEEAD', '#D4A5A5', '#9B59B6', '#3498DB'];
            const colorIndex = item.nama.charCodeAt(0) % colors.length;
            const bgColor = colors[colorIndex];
            const inisial = item.nama.charAt(0).toUpperCase();

            // 2. Logic Badge Hadir/Tidak
            let badge = '';
            if(item.hadir == '1') {
                badge = `<span class="badge-hadir"><i class="fa-solid fa-check me-1"></i>Hadir</span>`;
            } else if(item.hadir == '2') {
                badge = `<span class="badge-absen"><i class="fa-solid fa-xmark me-1"></i>Maaf</span>`;
            }

            // 3. Render HTML Modern (Chat Bubble)
            // Note: util.escapeHtml dipakai biar aman dari script jahat
            const html = `
            <div class="comment-card p-3 mb-3 d-flex gap-3" data-aos="fade-up" data-aos-duration="800">
                <div class="flex-shrink-0">
                    <div class="avatar-circle" style="background-color: ${bgColor};">
                        ${inisial}
                    </div>
                </div>
                
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start mb-1">
                        <div>
                            <div class="fw-bold comment-name">
                                ${util.escapeHtml(item.nama)} 
                                <i class="fa-solid fa-circle-check text-primary fa-xs ms-1" title="Verified Guest"></i>
                            </div>
                            <div class="comment-date"><i class="fa-regular fa-clock me-1"></i>${item.waktu}</div>
                        </div>
                        ${badge}
                    </div>
                    
                    <div class="comment-body p-2 mt-2">
                        "${util.escapeHtml(item.pesan)}"
                    </div>
                </div>
            </div>`;
            
            box.innerHTML += html;
        });
    })
    .catch(err => { 
        console.error(err); 
        box.innerHTML = '<div class="text-center text-danger small py-3">Gagal memuat komentar.</div>'; 
    });
},

            // FUNGSI KIRIM KOMENTAR KE DATABASE
           send: function(btn) {
    const nameIn = document.getElementById('form-name');
    const presenceIn = document.getElementById('form-presence');
    const msgIn = document.getElementById('form-comment');

    // Validasi Input
    if (!nameIn.value || !msgIn.value || presenceIn.value == "0") {
        alert("Mohon lengkapi data nama, kehadiran, dan ucapan.");
        return;
    }

    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Mengirim...';
    btn.disabled = true;

    // --- BAGIAN PENTING: Bungkus Data ---
    const dataKirim = {
        // Kita paksa ID Klien masuk sini lewat PHP
        client_id: <?= $id_klien ?>, 
        nama: nameIn.value,
        hadir: presenceIn.value,
        pesan: msgIn.value
    };

    // Kirim ke API Simpan
    fetch('api/simpan.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(dataKirim)
    })
    .then(response => response.json())
    .then(result => {
        if (result.status === 'success') {
            alert("Terima kasih! Ucapan berhasil terkirim.");
            msgIn.value = ""; // Kosongkan form pesan
            undangan.comment.load(); // Reload komentar otomatis
        } else {
            alert("Gagal mengirim: " + result.message);
        }
    })
    .catch(err => {
        alert("Terjadi kesalahan koneksi. Cek Console Browser (F12) untuk detail.");
        console.error(err);
    })
    .finally(() => {
        btn.innerHTML = originalText;
        btn.disabled = false;
    });
},
            gif: { open: function() { alert("Fitur GIF belum tersedia"); }, default: null }
        }
    };

    // Tambahkan ini di bagian inisialisasi paling bawah
    document.addEventListener('DOMContentLoaded', () => {
        // Init fitur lain
        theme.init();
        loader.init();
        countdown.init();
        
        // --- [BAGIAN PENTING: COLOK TOMBOL MUSIK] ---
        const btnMusic = document.getElementById('button-music');
        if(btnMusic) {
            // Pasang kuping (listener) biar pas diklik dia jalanin fungsi toggle
            btnMusic.onclick = function() {
                audio.toggle();
            };
        }
        // ---------------------------------------------

        undangan.comment.load(); 
    });

    document.addEventListener('DOMContentLoaded', () => {
        theme.init(); // Fix tema gelap/terang saat awal
        loader.init();
        countdown.init();
        
        // Fix tombol musik agar sesuai ID di HTML
        audio.btn = document.getElementById('button-music');
    });

</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Pilih wadah scroll dan elemen yang mau dianimasi
    const scrollContainer = document.querySelector('.scroll-cinta');
    const animatedItems = document.querySelectorAll('.story-animate');

    if (!scrollContainer || animatedItems.length === 0) return;

    // 2. Setting Observer (Mata-mata)
    const options = {
        root: scrollContainer, // Area pantau hanya di dalam kotak ini
        threshold: 0.2 // Animasi jalan saat 20% elemen terlihat
    };

    // 3. Fungsi ketika elemen terlihat
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Tambahkan class 'show' biar animasi CSS jalan
                entry.target.classList.add('show');
                // Stop pantau elemen ini (biar hemat memori)
                observer.unobserve(entry.target); 
            }
        });
    }, options);

    // 4. Mulai memantau semua item cerita
    animatedItems.forEach(item => {
        observer.observe(item);
    });
});
</script>
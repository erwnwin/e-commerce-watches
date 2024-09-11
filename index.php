<?php

include 'libraries/title.php';

$ref = isset($_GET['ref']) ? $_GET['ref'] : 'beranda';

// Set judul halaman dan menu yang aktif
$page_title = formatTitle($ref);

// Mengatur jalur file controller
$controller_path = "controllers/" . strtolower($ref) . ".php";

// Memeriksa apakah file controller ada
if (file_exists($controller_path)) {
    include $controller_path;
} else {
    echo "Halaman tidak ditemukan!";
}


include 'views/template/head.php';
if ($ref == 'jamTangan' || $ref == 'hubungiKami' || $ref == 'tentangKami') {
    include 'views/template/header_new.php';
} else {
    include 'views/template/header.php';
}
// include 'views/layout/sidebar.php';

// Tentukan folder berdasarkan halaman yang diminta
$view_folder = 'default'; // Default folder
if ($ref == 'beranda') {
    $view_folder = 'beranda';
} elseif ($ref == 'jamTangan') {
    $view_folder = 'jam_tangan';
} elseif ($ref == 'hubungiKami') {
    $view_folder = 'hubungi_kami';
} elseif ($ref == 'tentangKami') {
    $view_folder = 'tentang_kami';
}

// Mengatur jalur view
$view_path = "views/" . $view_folder . "/index.php";

if (file_exists($view_path)) {
    include $view_path;
} else {
    // echo "Tampilan untuk halaman ini tidak ditemukan!";
}


include 'views/template/footer.php';

<?php
include "../koneksi.php";
session_start();
$tampil = mysqli_query($conf, "SELECT * FROM binatang");
?>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none"></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="infobinatang.php">INFO BINATANG</a></li>
                </ul>
            </div>
        </nav>
<!-- Page Content-->
<div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        <span class="text-primary">INFO BINATANG</span>
                    </h1>
                    <p class="lead mb-5">
                    Hewan, binatang, fauna, margasatwa, atau satwa adalah organisme eukariotik multiseluler yang membentuk kerajaan biologi Animalia.
                    Sebagian besar spesies hewan yang hidup diklasifikasikan dalam Bilateria, klad yang anggotanya memiliki bangun tubuh simetris bilateral. 
                    Bilateria mencakup protostoma—di dalamnya terdapat banyak kelompok invertebrata, seperti nematoda, artropoda, dan moluska—dan deuterostoma,
                    yang mencakup echinodermata dan chordata (termasuk vertebrata). Bentuk kehidupan yang ditafsirkan sebagai binatang purba ada dalam biota Ediakara dari Prakambrium akhir. 
                    Filum hewan modern menjadi jelas dalam catatan fosil sebagai spesies laut selama ledakan Kambrium sekitar 542 juta tahun yang lalu. 6,331 kelompok gen yang dimiliki semua hewan hidup telah diidentifikasi; 
                    ini mungkin muncul dari satu nenek moyang yang sama yang hidup 650 juta tahun yang lalu.
                    Tabel berikut mencantumkan perkiraan jumlah spesies yang ada yang masih ada untuk kelompok-kelompok hewan dengan jumlah spesies terbesar, 
                    dengan habitat utama mereka (darat, air tawar,dan laut),dan cara hidup bebas atau parasit. Perkiraan spesies yang ditunjukkan di sini didasarkan pada angka yang dideskripsikan secara ilmiah; 
                    perkiraan yang jauh lebih besar telah dihitung berdasarkan berbagai cara prediksi, dan ini bisa sangat bervariasi. 
                    Misalnya, sekitar 25.000-27.000 spesies nematoda telah dideskripsikan, sementara perkiraan jumlah nematoda yang dipublikasikan mencakup 10.000-20.000; 500.000; 10 juta; dan 100 juta.
                    Dengan menggunakan pola dalam hierarki taksonomi, jumlah spesies hewan—termasuk yang belum dideskripsikan—dihitung menjadi sekitar 7,77 juta pada tahun 2011.
                    </p>
                </div>
            </section>
            <section class="resume-section" id="">
                <div class="resume-section-content">
                    <h1 class="mb-0">
            <hr class="m-0" />

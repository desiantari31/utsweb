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
 <!-- Galery -->
 <section class="resume-section" id="galery">
                    <div class="resume-section-content">
                        <h1 class="mb-0">
                        <section id="galery"class="galery">
                        <h3 class="light center grey-text text-darken-3">GALERI FOTO</h3>
                        <div class="row">
                       <table border="1">
                            <tr>
                                <td>
                                    <img src="../images/cat.jpg"class="responsive-img materialboxed" width="100px">
                                </td>
                                <td>
                                    <img src="../images/serigala.jpg"class="responsive-img materialboxed" width="100px">
                                </td>
                                <td>
                                    <img src="../images/kudalaut.jpg"class="responsive-img materialboxed" width="100px">
                                </td>
                                <td>
                                    <img src="../images/anjinglaut.jpg"class="responsive-img materialboxed" width="100px">
                                </td>
                                <td>
                                    <img src="../images/ular.jpeg"class="responsive-img materialboxed" width="100px">
                                </td>
                                <td>
                                    <img src="../images/hiumartil.jpg"class="responsive-img materialboxed" width="100px">
                                </td>
                                <td>
                                    <img src="../images/garfile.jpg"class="responsive-img materialboxed" width="100px">
                                </td>
                            </tr>
                       </table> 
                        </section>
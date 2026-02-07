<?php


session_start();



if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("location:../index.php");
}


$_SESSION['menu'] = "beranda";
include "../includes/koneksi.php";
include "../includes/baseurl.php";
include "../includes/navbarAdmin.php";


?>
<main class="flex-fill">
    <div class="container">
        <h5>Panel</h5>
        <hr>
        <div class="row g-3">
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Total Kelas</h5>
                        <h2>10</h2>
                        <a href="#" class="btn btn-info text-light mt-2">Lihat Kelas</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Total Siswa</h5>
                        <h2 class="card-text">100</h2>
                        <a href="#" class="btn btn-info text-light mt-2">Lihat Siswa</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Total Katgeori</h5>
                        <h2 class="card-text">4</h2>
                        <a href="#" class="btn btn-info text-light mt-2">Lihat Kategori</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Total Aspirasi</h5>
                        <h2 class="card-text">50</h2>
                        <a href="#" class="btn btn-info text-light mt-2">Lihat Aspirasi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php

include "../includes/footer.php"

?>
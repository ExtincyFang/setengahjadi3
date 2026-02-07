<?php


session_start();



if (!isset($_SESSION['role']) || $_SESSION['role'] != "admin") {
    header("location:../index.php");
}



include "../includes/koneksi.php";
include "../includes/baseurl.php";
include "../includes/navbarAdmin.php";


?>
<main class="flex-fill">
    <div class="container">
        <h1>Selamat Datang <b><?= $_SESSION['nama'] ?></b></h1>
    </div>
</main>

<?php

include "../includes/footer.php"

?>
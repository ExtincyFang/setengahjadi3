<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    include "includes/baseurl.php";
    ?>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.css">

</head>

<body class="bg-info ">

    <?php
    if (!isset($_GET['pesan'])) {
        $judul      = "kesalahan sistem";
        $isi        = "Perubahan tidak tersimpan";
        $link       = base_url;
        $ikon       = "";
        $tombol     = "Landing page";
        $wtom       = "btn-info";
    }
    else if ($_GET['pesan'] == "gagallogin") 
    {

        $judul  = "Login Gagal";
        $isi    = "Username atau password yang Anda masukkan salah. Silakan periksa kembali dan coba lagi.";
        $link   = base_url. "login";
        $ikon   = "error";
        $tombol = "Coba Lagi";
        $wtom   = "btn-info";
    }
    else if ($_GET['pesan'] == "gagalinputkelas") 
    {

        $judul  = "Oops! Data Tidak Tersimpan";
        $isi    = "Input kelas belum berhasil disimpan. Pastikan semua field sudah diisi dengan benar.";
        $link   = base_url. "admin/kelas";
        $ikon   = "warning";
        $tombol = "Coba Lagi";
        $wtom   = "btn-info";
        
    }

    ?>


    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="shadow rounded p-5 text-center bg-light">
            <h2><?= $judul; ?></h2>
            <p><?= $isi; ?></p>
            <a href="<?= $link; ?>" class="btn <?= $wtom; ?> text-light"><?= $tombol; ?></a>
        </div>
    </div>

</body>

</html>
<?php
session_start();
include "../includes/koneksi.php";

$email    = $_POST['email'];
$password = $_POST['password'];

$hash_password = md5($password);

$sql = "SELECT * FROM tb_user 
        WHERE email='$email' 
        AND password='$hash_password'";

$query = mysqli_query($koneksi, $sql);
$hitung = mysqli_num_rows($query);

if ($hitung == 1) {
    $data = mysqli_fetch_assoc($query);

    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['nis']     = $data['nis'];
    $_SESSION['nama']    = $data['nama'];
    $_SESSION['role']    = $data['role'];
    $_SESSION['menu']    = "beranda";

    header("Location:../admin");
    exit;
} else {
    header("Location: ../galat.php?pesan=gagallogin");
    exit;
}
?>

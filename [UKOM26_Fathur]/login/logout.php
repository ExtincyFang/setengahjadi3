<?php
session_start();

include "../includes/baseurl.php";
session_destroy();
header("location:".base_url);
// echo "<srcipt>window.location.href='" . base_url . "'</srcript>";

?>
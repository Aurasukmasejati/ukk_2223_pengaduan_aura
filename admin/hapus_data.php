<?php
include"../config/koneksi.php";
$id = $_POST['id_petugas'];

$delete = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas = '$id'");
header("Location: index.php?page=petugas");
?>
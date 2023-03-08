<?php
include"../config/koneksi.php";
$id_pengaduan = $_POST['id_pengaduan'];
$judul = $_POST['judul_laporan'];
$isi = $_POST['isi_laporan'];
$foto = $_POST['foto'];

$delete = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan = '$id_pengaduan'");
header("Location: index.php");
?>
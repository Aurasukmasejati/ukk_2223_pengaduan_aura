<?php
include"../config/koneksi.php";
$id_pengaduan = $_POST['id_pengaduan'];
$judul = $_POST['judul_laporan'];
$isi = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$lokasi = '../assets/img/';
$nama_foto = rand(0,999).'-'.$foto;

move_uploaded_file($tmp, $lokasi.$nama_foto);

$update = mysqli_query($koneksi, "UPDATE pengaduan SET judul_laporan = $judul, isi_laporan = $isi, foto = $nama_foto WHERE id_pengaduan = '$id_pengaduan'");
header("Location: index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝐃𝐨𝐜𝐮𝐦𝐞𝐧𝐭</title>
</head>
<body style="background-image: url('../assets/img/bg-image.png')">

<?php
include '../config/koneksi.php';
$masyarakat = mysqli_query($koneksi,"SELECT * FROM masyarakat");
$jml_masyarakat =mysqli_num_rows($masyarakat);

$petugas =mysqli_query($koneksi,"SELECT * FROM petugas");
$jml_petugas =mysqli_num_rows($petugas);

$pengaduan =mysqli_query($koneksi,"SELECT * FROM pengaduan");
$jml_pengaduan =mysqli_num_rows($pengaduan);

$tanggapan =mysqli_query($koneksi,"SELECT * FROM tanggapan");
$jml_tanggapan =mysqli_num_rows($tanggapan);
?>
 
<div class="container">
    <h3 class="mt-3">𝐃𝐚𝐬𝐡𝐛𝐨𝐚𝐫𝐝</h3>
    <div class="row mt-6">
        <div class="col-md-5 mt-3">
            <div class="card">
                <div class="card-header" style="background-color:red">𝐌𝐚𝐬𝐲𝐚𝐫𝐚𝐤𝐚𝐭</div>
                <div class="card-body" style="background-color:red"><?php echo $jml_masyarakat; ?> orang</div>
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="card">
                <div class="card-header" style="background-color:yellow">𝗣𝗲𝗻𝗴𝗮𝗱𝘂𝗮𝗻</div>
                <div class="card-body" style="background-color:yellow"><?php echo $jml_pengaduan?>Aduan</div>
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="card">
                <div class="card-header"style="background-color:lightgreen">𝗧𝗮𝗻𝗴𝗴𝗮𝗽𝗮𝗻</div>
                <div class="card-body"style="background-color:lightgreen"><?php echo $jml_tanggapan?>Tanggapan</div>
            </div>
        </div>
        <div class="col-md-5 mt-3">
            <div class="card">
                <div class="card-header" style="background-color:green">𝗣𝗲𝘁𝘂𝗴𝗮𝘀</div>
                <div class="card-body"style="background-color:green"><?php echo $jml_petugas?>Pengguna</div>
            </div>
        </div>

    </div>

    
</body>
</html>
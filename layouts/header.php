<?php
// session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, instal-scale=1">
    <title>ððĐðĨðĒðĪððŽðĒ ððð§ð ðððŪðð§ ðððŽðēððŦððĪðð­ | ðððð ððððð ðððððð </title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #ADD8E6">
  <div class="container">
    <a class="navbar-brand" href="index.php">ððĐðĨðĒðĪððŽðĒ ððð§ð ðððŪðð§ ðððŽðēððŦððĪðð­</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
          <?php
          if ($_SESSION['login']=='admin') { ?>
            <a class="btn btn-primary" href="index.php?page=tanggapan">ððŪððŪ ð§ðŪðŧðīðīðŪð―ðŪðŧ</a>
            <a class="btn btn-primary" href="index.php?page=pengaduan">ððŪððŪ ð―ðēðŧðīðŪðąððŪðŧ</a>
            <a class="btn btn-primary" href="index.php?page=masyarakat">ððŪððŪ ðšðŪðððŪðŋðŪðļðŪð</a>
            <a class="btn btn-primary" href="index.php?page=petugas">ððŪððŪ ð―ðēðððīðŪð</a>
            <a class="btn btn-danger" href="../config/aksi_logout.php">ðĪððĨðŪððŦ</a>

            <?php } elseif($_SESSION['login']=='petugas'){ ?>
              <a class="nav-link" href="index.php?page=pengaduan">ððŪððŪ ð―ðēðŧðīðŪðąððŪn</a>
              <a class="nav-link" href="index.php?page=tanggapan">ððŪððŪ ð§ðŪðŧðīðīðŪð―ðŪðŧ</a>
              <a class="nav-link" href="../config/aksi_logout.php">ðĪððĨðŪððŦ</a>
              
            
            <?php } elseif($_SESSION['login']=='masyarakat'){ ?>
              <a class="btn btn-danger" href="../config/aksi_logout.php">ðĪððĨðŪððŦ</a>

              <?php  }else{?>
          <a class="nav-link" href="index.php?page=registrasi">ðððð­ððŦ ððĪðŪð§</a>
          <a class="nav-link" href="login.php">ððĻð ðĒð§</a>

           <?php } ?>
      </ul>
    </div>
  </div>
</nav>
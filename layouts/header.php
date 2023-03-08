<?php
// session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, instal-scale=1">
    <title>𝐀𝐩𝐥𝐢𝐤𝐚𝐬𝐢 𝐏𝐞𝐧𝐠𝐚𝐝𝐮𝐚𝐧 𝐌𝐚𝐬𝐲𝐚𝐫𝐚𝐤𝐚𝐭 | 𝐀𝐔𝐑𝐀 𝐒𝐔𝐊𝐌𝐀 𝐒𝐄𝐉𝐀𝐓𝐈 </title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <script src="../assets/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #ADD8E6">
  <div class="container">
    <a class="navbar-brand" href="index.php">𝐀𝐩𝐥𝐢𝐤𝐚𝐬𝐢 𝐏𝐞𝐧𝐠𝐚𝐝𝐮𝐚𝐧 𝐌𝐚𝐬𝐲𝐚𝐫𝐚𝐤𝐚𝐭</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
          <?php
          if ($_SESSION['login']=='admin') { ?>
            <a class="btn btn-primary" href="index.php?page=tanggapan">𝗗𝗮𝘁𝗮 𝗧𝗮𝗻𝗴𝗴𝗮𝗽𝗮𝗻</a>
            <a class="btn btn-primary" href="index.php?page=pengaduan">𝗗𝗮𝘁𝗮 𝗽𝗲𝗻𝗴𝗮𝗱𝘂𝗮𝗻</a>
            <a class="btn btn-primary" href="index.php?page=masyarakat">𝗗𝗮𝘁𝗮 𝗺𝗮𝘀𝘆𝗮𝗿𝗮𝗸𝗮𝘁</a>
            <a class="btn btn-primary" href="index.php?page=petugas">𝗗𝗮𝘁𝗮 𝗽𝗲𝘁𝘂𝗴𝗮𝘀</a>
            <a class="btn btn-danger" href="../config/aksi_logout.php">𝐤𝐞𝐥𝐮𝐚𝐫</a>

            <?php } elseif($_SESSION['login']=='petugas'){ ?>
              <a class="nav-link" href="index.php?page=pengaduan">𝗗𝗮𝘁𝗮 𝗽𝗲𝗻𝗴𝗮𝗱𝘂𝗮n</a>
              <a class="nav-link" href="index.php?page=tanggapan">𝗗𝗮𝘁𝗮 𝗧𝗮𝗻𝗴𝗴𝗮𝗽𝗮𝗻</a>
              <a class="nav-link" href="../config/aksi_logout.php">𝐤𝐞𝐥𝐮𝐚𝐫</a>
              
            
            <?php } elseif($_SESSION['login']=='masyarakat'){ ?>
              <a class="btn btn-danger" href="../config/aksi_logout.php">𝐤𝐞𝐥𝐮𝐚𝐫</a>

              <?php  }else{?>
          <a class="nav-link" href="index.php?page=registrasi">𝐃𝐚𝐟𝐭𝐚𝐫 𝐀𝐤𝐮𝐧</a>
          <a class="nav-link" href="login.php">𝐋𝐨𝐠𝐢𝐧</a>

           <?php } ?>
      </ul>
    </div>
  </div>
</nav>
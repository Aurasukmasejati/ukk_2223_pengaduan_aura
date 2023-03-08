<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Pengaduan Masyarakat | Aura Sukma Sejati</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background-image: url('assets/img/rrr-img.jpg');">
  
  <nav class="navbar navbar-expand-lg" style="background-color: lightblue;">
  <div class="container">
    <a class="navbar-brand" href="index.php">𝐀𝐩𝐥𝐢𝐤𝐚𝐬𝐢 𝐏𝐞𝐧𝐠𝐚𝐝𝐮𝐚𝐧 𝐌𝐚𝐬𝐲𝐚𝐫𝐚𝐤𝐚𝐭</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-primary" href="index.php?page=registrasi">Daftar Akun</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-danger" href="index.php?page=login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
if (isset($_GET['page'])) {
    $page= $_GET['page'];

switch ($page) {
    case 'login':
        include 'login.php';
        break;
        case 'registrasi':
            include 'registrasi.php';
            break;

        default:
        echo "halaman tidak tersedia";
        break;
}
} else{
    include 'home.php';
}

?>


<footer class="footer fixed-bottom py-2" style="background-color: lightblue;">
    <div class="container">
        <p class="text-center">𝙰𝚙𝚕𝚒𝚔𝚊𝚜𝚒 𝙿𝚎𝚗𝚐𝚊𝚍𝚞𝚊𝚗 𝙼𝚊𝚜𝚢𝚊𝚛𝚊𝚔𝚊𝚝 | 𝙰𝚞𝚛𝚊 𝚂𝚞𝚔𝚖𝚊 𝚂𝚎𝚓𝚊𝚝𝚒</p>
    </div>
</footer>

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
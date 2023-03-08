<?php
session_start();
include '../layouts/header.php';
if (empty ($_SESSION['login']== 'admin' || $_SESSION['login']== 'petugas')) {
    header("location:../index.php");
}

if (isset($_GET['page'])) {
    $page= $_GET['page'];

switch ($page) {
    case 'pengaduan':
        include 'data_pengaduan.php';
        break;
        case 'tanggapan':
            include 'data_tanggapan.php';
            break;
            case 'petugas':
                include 'data_petugas.php';
                break;
                case 'masyarakat':
                    include 'data_masyarakat.php';
                    break;
        default:
        echo "halaman tidak tersedia";
        break;
  }
} else{
    include 'home.php';
}
?>


<footer class="footer fixed-bottom py-2 bg-light">
    <div class="container">
        <p class="text-center">UKK RPL 2023 | AURA SUKMA SEJATI | SMKN 1 KARAWANG</p>
    </div>
</footer>
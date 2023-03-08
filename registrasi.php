<div class="row mt-3" style="margin-bottom: 50px">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header">
            𝐑𝐄𝐆𝐈𝐒𝐓𝐑𝐀𝐒𝐈

            </div>
            <div class="card-body"> 
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">𝗡𝗜𝗞</label>
                        <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">𝗡𝗮𝗺𝗮 𝗟𝗲𝗻𝗴𝗸𝗮𝗽</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">𝗨𝘀𝗲𝗿𝗻𝗮𝗺𝗲</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">𝐏𝐚𝐬𝐬𝐰𝐨𝐫𝐝</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">𝗞𝗼𝗻𝗳𝗶𝗿𝗺𝗮𝘀𝗶 𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">𝗡𝗼 𝗧𝗲𝗹𝗲𝗽𝗼𝗻</label>
                        <input type="number" class="form-control" name="telp" placeholder="Masukkan No.Telp" required>
                    </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="kirim" class="btn btn-warning">DAFTAR</button>
                <a href="index.php?page=login" class="m-3">Sudah punya akun? Login disini!</a>
            </div>
            <form>
        </div>
    </div>
</div>

<?php
include 'config/koneksi.php';
if(isset($_POST['kirim'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $level ='masyarakat';

    $query = mysqli_query($koneksi,"INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp','$level')");

    if($query) {
        header('Location:index.php?=login');
    }
}

?>  
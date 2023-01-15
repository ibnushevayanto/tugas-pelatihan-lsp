<?php
// require_once './utils/koneksi.php';
require_once './utils/pegawai.php';

$pegawai = new Pegawai();
$daftar_pegawai = $pegawai->daftar_pegawai();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar Pegawai</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="./css/sb-admin.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <h5>Daftar Pegawai</h5>
    </nav>
    <div class="container-fluid">
        <div class="py-4">
            <a href="./tambah.php" class="btn btn-primary">Buat Pegawai Baru</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Nomor Telepon</th>
                        <th>Alamat</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $daftar_pegawai->fetch_assoc()) {
                        echo "
                        <tr>
                            <td>
                                <img width='50' height='50' class='img-profile rounded-circle' src='{$row['foto']} ' />
                                {$row['nama']}
                            </td>
                            <td>{$row['nomor_telpon']}</td>
                            <td>{$row['alamat']}</td>
                            <td>
                                <a class='btn btn-primary' href='ubah.php?id={$row['id']}'>Ubah</a>
                                <a class='btn btn-danger' href='utils/proses_pegawai/hapus.php?id={$row['id']}'>Hapus</a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
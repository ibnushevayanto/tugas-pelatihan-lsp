<?php
require_once __DIR__ . "/" . '../utils/app.php'
?>


<form class="user" method="post" action="utils/proses_pegawai/simpan.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?? '' ?>">
    <div class="form-group">
        Nama Pegawai
        <input class="form-control" required name="nama" value="<?= $data['nama'] ?? '' ?>">
    </div>
    <div class="form-group">
        Nomor Telepon
        <input required class="form-control" name="nomor_telpon" value="<?= $data['nomor_telpon'] ?? '' ?>">
    </div>
    <div class="form-group">
        Alamat
        <input required class="form-control" name="alamat" value="<?= $data['alamat'] ?? '' ?>">
    </div>
    <div class="form-group">
        <div>Foto</div>
        <input type="file" required name="foto" accept="image/png, image/gif, image/jpeg" />
        <?php
        if (isset($data['foto'])) {
            echo "
                <div>
                    " . get_nama_photo($data['foto']) . "
                </div>
                ";
        }
        ?>

    </div>
    <div class="text-right">
        <button class="btn btn-danger" type="reset">Reset</button>
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
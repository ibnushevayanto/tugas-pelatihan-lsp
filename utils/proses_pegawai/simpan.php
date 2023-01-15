<?php
require_once '../pegawai.php';

$pegawai = new Pegawai();
$pegawai->simpan_pegawai($_POST['id'] ?? '', $_POST['nama'] ?? '', $_POST['alamat'] ?? '', $_POST['nomor_telpon'] ?? '', $_FILES['foto']);

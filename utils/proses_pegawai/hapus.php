<?php
require '../pegawai.php';

$pegawai = new Pegawai();
$pegawai->hapus_pegawai($_GET['id']);

<?php
require_once __DIR__ . '/' . './koneksi.php';

class Pegawai extends Koneksi
{
    function __construct()
    {
        parent::__construct();
    }

    public function daftar_pegawai()
    {
        $koneksi = parent::connect();
        return $koneksi->query("SELECT * FROM pegawai");
    }

    public function simpan_pegawai($id, $nama, $alamat, $nomor_telpon, $foto)
    {
        $koneksi = parent::connect();
        $target_file = $this->upload($foto);

        if ($target_file) {
            if ($id === '') {
                $query = $koneksi->query("INSERT INTO pegawai VALUES (null, '{$nama}', '{$alamat}', '{$nomor_telpon}', '{$target_file}')");
            } else {
                $query = $koneksi->query("UPDATE pegawai SET nama = '{$nama}', alamat = '{$alamat}', nomor_telpon = '{$nomor_telpon}', foto = '{$target_file}' WHERE id = {$id}");
            }

            if ($query) {
                echo "<script>
                    alert('Data Berhasil Disimpan'); 
                    document.location.href = '../../index.php'; 
                </script>";
            } else {
                echo "<script>
                    alert('Data Gagal Disimpan'); 
                    document.location.href = '../../index.php'; 
                </script>";
            }
        } else {
            echo "<script>
                alert('Data Gagal Disimpan'); 
                document.location.href = '../../index.php'; 
            </script>";
        }
    }

    public function upload($photo)
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($photo['name']);
        // $imageFileType = strtolower(pathinfo("../" . $target_file, PATHINFO_EXTENSION));

        $checkImage = getimagesize($photo['tmp_name']);
        $uploadOk = 1;

        if ($checkImage !== false) {
            if ($uploadOk === 1) {
                move_uploaded_file($photo['tmp_name'], "../../" . $target_file);
                return $target_file;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function hapus_pegawai($id)
    {
        $koneksi = parent::connect();
        $query = $koneksi->query("DELETE FROM pegawai WHERE id = {$id}");
        if ($query) {
            echo "<script>
            alert('Data Berhasil Dihapus'); 
            document.location.href = '../../index.php'; 
        </script>";
        } else {
            echo "<script>
            alert('Data Gagal Dihapus'); 
            document.location.href = '../../index.php'; 
        </script>";
        }
    }

    public function detail_pegawai($id)
    {
        $koneksi = parent::connect();
        return $koneksi->query("SELECT * FROM pegawai WHERE id = {$id} ")->fetch_assoc();
    }
}

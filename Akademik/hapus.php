<?php
include 'setting.php';
$kode = $_GET['kode'];
$query="DELETE FROM tbl_mahasiswa WHERE kode=$kode";
$sql= mysqli_query($koneksi,$query);
if($sql){
    echo "data berhasil kode hapus";
    header('location:home.php');
}else{
    echo "data gagal terhapus";
}
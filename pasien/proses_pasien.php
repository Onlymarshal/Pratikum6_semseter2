<?php
require_once 'dbkoneksi.php';
var_dump($_POST['id']);

// Tangkap data dari form
$_kode = $_POST['kode'];  
$_nama = $_POST['nama'];  
$_tmp_lahir = $_POST['tmp_lahir'];  
$_tgl_lahir = $_POST['tgl_lahir'];  
$_gender = $_POST['gender'];  
$_email = $_POST['email'];  
$_alamat = $_POST['alamat']; 

$data = [$_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_gender, $_email, $_alamat];

$_proses = $_POST['proses'];

// Cek nilai proses
if ($_proses == "Simpan") {
    $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} elseif ($_proses == "Edit") {
    // Tangkap ID pasien dari form
    $_id = $_POST['id'];
    $sql = "UPDATE pasien 
            SET kode = ?, nama = ?, tmp_lahir = ?, tgl_lahir = ?, gender = ?, email = ?, alamat = ?
            WHERE id = ?";
    // Tambahkan ID pasien ke dalam data
    array_push($data, $_id);
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
} elseif ($_proses == "Hapus") {
    $_id = $_POST['id'];
    $sql = "DELETE FROM pasien WHERE id = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$_id]);
}

// Redirect page ke halaman data_pasien.php 
header('Location: data_pasien.php');
?>
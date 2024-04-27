<?php

require 'dbkoneksi.php';


if (!isset($_GET['id'])) {
    
    header("Location: data_periksa.php");
    exit();
}


$id = $_GET['id'];


$stmt = $dbh->prepare("SELECT * FROM periksa WHERE id=?");
$stmt->execute([$id]);
$periksa = $stmt->fetch();


if (!$periksa) {
   
    header("Location: data_periksa.php");
    exit();
}


$tanggal = $periksa['tanggal'];
$berat = $periksa['berat'];
$tinggi = $periksa['tinggi'];
$tensi = $periksa['tensi'];
$keterangan = $periksa['keterangan'];
$pasien_id = $periksa['pasien_id'];
$dokter_id = $periksa['dookter_id'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $tanggal = $_POST['tanggal'];
    $berat = $_POST['berat'];
    $tinggi = $_POST['tinggi'];
    $tensi = $_POST['tensi'];
    $keterangan = $_POST['keterangan'];
    $pasien_id = $_POST['pasien_id'];
    $dokter_id = $_POST['dookter_id'];

    
    $sql = "UPDATE periksa SET tanggal=?, berat=?, tinggi=?, tensi=?, keterangan=?, pasien_id=?, dookter_id=? WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$tanggal, $berat, $tinggi, $tensi, $keterangan, $pasien_id, $dokter_id, $id]);

    
    header("Location: data_periksa.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Edit Pemeriksaan</title>
</head>

<body>
    <div style="border: 2px solid black; width: 800px; margin: auto; margin-top: 60px; background-color: ivory; box-shadow: 2px 2px 2px greenyellow;">
        <h2 class="text-center" style="color: darkorange; text-shadow: black 1px 1px 1px; padding-top: 10px;">Edit Pemeriksaan</h2>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id; ?>" method="POST" style="margin-left: 100px;">
            <div class="form-group row mt-3">
                <label for="tanggal" class="col-3 col-form-label">Tanggal</label>
                <div class="col-6">
                    <input required id="tanggal" name="tanggal" type="date" class="form-control" value="<?php echo $tanggal; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-3 col-form-label">Berat Badan</label>
                <div class="col-6">
                    <input required id="berat" name="berat" type="number" class="form-control" value="<?php echo $berat; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi" class="col-3 col-form-label">Tinggi Badan</label>
                <div class="col-6">
                    <input required id="tinggi" name="tinggi" type="number" class="form-control" value="<?php echo $tinggi; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tensi" class="col-3 col-form-label">Tensi</label>
                <div class="col-6">
                    <input required id="tensi" name="tensi" type="text" class="form-control" value="<?php echo $tensi; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="keterangan" class="col-3 col-form-label">Keterangan</label>
                <div class="col-6">
                    <textarea name="keterangan" id="keterangan" rows="5" class="form-control"><?php echo $keterangan; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="pasien_id" class="col-3 col-form-label">Id Pasien</label>
                <div class="col-6">
                    <input required id="pasien_id" name="pasien_id" type="number" class="form-control" value="<?php echo $pasien_id; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="dookter_id" class="col-3 col-form-label">Id Dokter</label>
                <div class="col-6">
                    <input required id="dookter_id" name="dookter_id" type="number" class="form-control" value="<?php echo $dookter_id; ?>">
                </div>
            </div>
            <div class="form-group row" style="margin-right: 160px;">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3

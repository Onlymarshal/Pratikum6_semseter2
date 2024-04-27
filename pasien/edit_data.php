<?php
require_once 'dbkoneksi.php';

// inisialisasi variabel untuk menyimpan pesan kesalahan atau berhasil
$message = '';

// inisialisasi variabel untuk data pasien
$pasien = [];

// Cek parameter ID yang dikirim lewat URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM pasien WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    $pasien = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$pasien) {
        // Jika data pasien tidak ditemukan, redirect ke halaman data_pasien.php
        header("Location: index.php");
        exit();
    }
}

// Handle form submission untuk update data pasien
if(isset($_POST['update'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    
    // Query untuk update data pasien
    $sql = "UPDATE pasien SET kode = :kode, nama = :nama, alamat = :alamat, email = :email WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':kode', $kode);
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':id', $id);
    
    // Eksekusi query
    if($stmt->execute()) {
        // Redirect ke halaman data_pasien.php setelah proses update berhasil
        header("Location: data_pasien.php");
        exit();
    } else {
        // Redirect ke halaman form dengan status error jika terjadi kesalahan
        header("Location: data_pasien.php?id=$id&status=error");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form method="POST" action="edit_data.php?id=<?php echo $id; ?>" class="w-50 mt-5 mx-auto p-4" style="border: solid black 2px; background-color: ivory; box-shadow: orange 2px 2px 2px; height: 650px;">
        <h2 style="text-align: center; text-shadow: orange 2px 1px 1px;">Form Pasien</h2>
        <hr>
        <!-- Tampilkan pesan kesalahan atau berhasil -->
        <?php if(!empty($message)): ?>
        <div class="alert alert-<?php echo substr($message, 0, 5) == 'Data ' ? 'success' : 'danger'; ?>" role="alert">
            <?php echo $message; ?>
        </div>
        <?php endif; ?>
        <div style="display:flex; margin-top: 40px;">
            <div class="container px-3">
                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label"><b>Kode</b> <span style="padding-left: 123px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="kode" id="kode" type="text" class="form-control" value="<?php echo $pasien['kode'] ?? ''; ?>" required style="border-color: orange;  box-shadow: orange 2px 2px 2px inset;">
                    </div>
                </div>
                 
                <div class="form-group row" style="margin-top: 20px;">
                    <label for="nama" class="col-4 col-form-label"><b>Nama Lengkap</b> <span style="padding-left: 50px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="nama" id="nama" type="text" class="form-control" value="<?php echo $pasien['nama'] ?? ''; ?>" required style="border-color: orange;  box-shadow: orange 2px 2px 2px inset;">
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 20px;">
                    <label for="alamat" class="col-4 col-form-label"><b>Alamat</b> <span style="padding-left: 110px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="alamat" id="alamat" type="text" class="form-control" value="<?php echo $pasien['alamat'] ?? ''; ?>" required style="border-color: orange;  box-shadow: orange 2px 2px 2px inset;">
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 20px;">
                    <label for="email" class="col-4 col-form-label"><b>Email</b> <span style="padding-left: 122px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="email" id="email" type="text" class="form-control" value="<?php echo $pasien['email'] ?? ''; ?>" required style="border-color: orange;  box-shadow: orange 2px 2px 2px inset;">
                    </div>
                </div>
                <div>
                    <input name="update" type="submit" value="Update" style="margin-top: 20px; width: 80px; height: 35px; border-radius: 8px; margin-left: 236px; background-color: white; box-shadow: orange 2px 2px 2px; border-color: orange;">
                </div>
            </div>
        </div>
    </form>
</body>

</html>
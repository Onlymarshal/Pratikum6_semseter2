<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Paramedik</title>
</head>

<body>
    <div style="border: 2px solid black; width: 800px; margin: auto; margin-top: 60px; background-color: ivory; box-shadow: 2px 2px 2px greenyellow;">
        <h2 class="text-center" style="color: darkorange; text-shadow: black 1px 1px 1px; padding-top: 10px;">Form Paramedik</h2>
        <hr>
        <form action="proses_paramedik.php" method="POST" style="margin-left: 100px;">
            <div class="form-group row mt-4">
                <label for="nama" class="col-3 col-form-label">Nama</label>
                <div class="col-6">
                    <input required id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-3 col-form-label">Jenis Kelamin</label>
                <div class="col-6">
                    <select id="gender" name="gender" class="custom-select">
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-3 col-form-label">Tempat Lahir</label>
                <div class="col-6">
                    <input required id="tmp_lahir" name="tmp_lahir" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-3 col-form-label">Tanggal Lahir</label>
                <div class="col-6">
                    <input required id="tgl_lahir" name="tgl_lahir" type="date" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="kategori" class="col-3 col-form-label">Kategori</label>
                <div class="col-6">
                    <select id="kategori" name="kategori" class="custom-select">
                        <option value="">Pilih kategori</option>
                        <option value="perawat">Perawat</option>
                        <option value="paramedis">Paramedis</option>
                        <option value="teknisi medis">Teknisi Medis</option>
                        <option value="asisten medis">Asisten Medis</option>
                    </select>
                </div>
            </div>
            <div class="form-group row mt-3 ">
                <label for="telpon" class="col-3 col-form-label">Telepon</label>
                <div class="col-6">
                    <input required id="telpon" name="telpon" type="tel" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-3 col-form-label">Alamat</label>
                <div class="col-6">
                    <input required id="alamat" name="alamat" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="unit_kerja_id" class="col-3 col-form-label">Id Unit Kerja</label>
                <div class="col-6">
                    <input required id="unit_kerja_id" name="unit_kerja_id" type="number" class="form-control">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
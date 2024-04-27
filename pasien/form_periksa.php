<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Pemeriksaan</title>
</head>

<body>
    <div style="border: 2px solid black; width: 800px; margin: auto; margin-top: 60px; background-color: ivory; box-shadow: 2px 2px 2px greenyellow;">
        <h2 class="text-center" style="color: darkorange; text-shadow: black 1px 1px 1px; padding-top: 10px;">Form Pemeriksaan</h2>
        <hr>
        <form action="proses_periksa.php" method="POST"  style="margin-left: 100px;">
            <div class="form-group row mt-3">
                <label for="tanggal" class="col-3 col-form-label">Tanggal</label>
                <div class="col-6">
                    <input required id="tanggal" name="tanggal" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-3 col-form-label">Berat Badan</label>
                <div class="col-6">
                    <input required id="berat" name="berat" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tinggi" class="col-3 col-form-label">Tinggi Badan</label>
                <div class="col-6">
                    <input required id="tinggi" name="tinggi" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tensi" class="col-3 col-form-label">Tensi</label>
                <div class="col-6">
                    <input required id="tensi" name="tensi" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="keterangan" class="col-3 col-form-label">Keterangan</label>
                <div class="col-6">
                    <textarea name="keterangan" id="keterangan" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="pasien_id" class="col-3 col-form-label">Id Pasien</label>
                <div class="col-6">
                    <input required id="pasien_id" name="pasien_id" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="dookter_id" class="col-3 col-form-label">Id Dokter</label>
                <div class="col-6">
                    <input required id="dookter_id" name="dookter_id" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-3 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha386-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
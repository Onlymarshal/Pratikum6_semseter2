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
    <form method="POST" action="proses_pasien.php" class="w-50 mt-5 mx-auto p-4" style="border: solid black 2px; background-color: ivory; box-shadow: yellowgreen 2px 2px 2px; height: 650px;">
        <h2 style="text-align: center; color: darkorange; text-shadow: black 1px 1px 1px;">Form Pasien</h2>
        <hr>
        <div style="display:flex; margin-top: 40px; margin-left: 60px;">
            <div class="container px-3">
                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label"><b>Kode</b> <span style="padding-left: 123px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="kode" id="kode" type="text" class="form-control" required style="border-color: orange;  ">
                    </div>
                </div>
                 
                <div class="form-group row" style="margin-top: 20px;">
                    <label for="nama" class="col-4 col-form-label"><b>Nama Lengkap</b> <span style="padding-left: 50px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="nama" id="nama" type="text" min=0 class="form-control" required style="border-color: orange;  ">
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 20px;">
                    <label for="tmp_lahir" class="col-4 col-form-label"><b>Tempat Lahir</b> <span style="padding-left: 65px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="tmp_lahir" id="tmp_lahir" type="text" min=0 class="form-control" required style="border-color: orange;  ">
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 20px;">
                    <label for="tgl_lahir" class="col-4 col-form-label"><b>Tanggal Lahir</b> <span style="padding-left: 63px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="tgl_lahir" id="tgl_lahir" type="date" min=0 class="form-control" required style="border-color: orange;  ">
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 20px;">
                    <label for="gender" class="col-4 col-form-label"><b>Jenis Kelamin</b> <span style="padding-left: 62px;"><b>:</b></span></label>
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender" type="radio" class="custom-control-input" value="L"> 
                    <label for="gender" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender" type="radio" class="custom-control-input" value="P"> 
                    <label for="gender" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
                </div>
                <div class="form-group row" style="margin-top: 20px;">
                    <label for="email" class="col-4 col-form-label"><b>Email</b> <span style="padding-left: 122px;"><b>:</b></span></label>
                    <div class="col-6">
                        <input name="email" id="email" type="text" min=0 class="form-control" required style="border-color: orange;  ">
                    </div>
                </div>
                <div class="form-group row" style="margin-top: 20px;">  
                <table>
                   <tr>
                    <th style="padding-left: 15px;" class="col-4 col-form-th"><b>Alamat<span style="padding-left: 105px;">:</span></b></th>
                    <td>
                        <textarea name="alamat" id="alamat" cols="38" rows="3" style="margin-left: 12px; border-color: orange;  "></textarea>
                    </td>
                    </tr>
                    </table>   
                </div>
                    <div>
                        <input name="proses" type="submit" name="proses" value="Simpan"
                         style="margin-top: 20px; width: 80px; height: 35px; border-radius: 8px; margin-left: 236px; background-color: white; box-shadow: orange 2px 2px 2px; border-color: orange;">
                    </div>
                </div>
            </div>
        </div>
        
    </form>
</body>

</html>
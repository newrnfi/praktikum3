<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .form-control {
            width: 400px;
        }
        .form-select {
            width: 400px;
        }
        .isi {
            margin-left: 400px;
            margin-top: 25px;
            width: 820px;
        }
        .card {
            margin-left: 390px;
        }
    </style>
</head>
<body>
    <div class="bg-dark p-4">
        <h2 class="mt-2 text-light bg-dark">Menghitung BMI Pasien</h2>
    </div>
    <div class="mx-4">
    <hr class="mb-0 mt-0">
    
    <form class="form-horizontal" method="POST" action="daftar_bmipasien.php">
    <fieldset>

    <!-- Form Name -->
    <legend>Form Isian Indeks Massa Tubuh (BMI)</legend>
    <hr class="mb-2 mt-0">
    <div class="isi">
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Nama Lengkap </label>
            <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="">
        </div>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Berat Badan </label>
            <div class="col-sm-10">
            <input type="text" name="berat" class="form-control" id="" placeholder="Berat Badan (kg)">
        </div>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Tinggi Badan </label>
            <div class="col-sm-10">
            <input type="text" name="tinggi" class="form-control" id="" placeholder="Tinggi Badan (cm)">
        </div>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Umur </label>
            <div class="col-sm-10">
            <input type="text" name="umur" class="form-control" id="">
        </div>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Jenis Kelamin </label>
            <div class="col-sm-10">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki-laki">
                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>
        </div>
        </div>
        
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <input type="submit" value="Simpan" name="proses" class="btn btn-primary"/>
        </div>
        </div>
    </fieldset>
    </form>
    <br/>
    <?php
    require_once "class_bmipasien.php";
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $berat = $_POST['berat'];
        $tinggi = $_POST['tinggi'];
        $umur = $_POST['umur'];
        $ubah = $tinggi * 0.01;
        $jenis_kelamin = $_POST['jk'];
        $BMIPasien = new BMIPasien($berat, $ubah );
        $bmi = round($BMIPasien->hasilbmi(),1);
        $status = ($BMIPasien->statusbmi());
        echo '<div class="card mb-3" style="width: 35rem; border: 5px dotted black;"><div class="card-body"><h5 class="card-title" style="text-align: center;">Hasil Evaluasi BMI</h5>';
        echo '<p class="card-text"><table style="width: 600px;"><thead><tr><th></th><th></th></tr><tbody><tr><td>Nama</td><td>  : '.$nama.'</td></tr>';
        echo '<tr><td>Berat / Tinggi Badan </td><td> : '.$berat.'kg/'.$tinggi.'cm</td></tr>';
        echo '<tr><td>Umur </td><td> : '.$umur.' Tahun</td></tr>';
        echo '<tr><td>BMI </td><td> : '.$bmi.'</td></tr>';
        echo '<tr><td>Hasil </td><td> : '.$status.'</td></tr></tbody></table></p></div>';
    }
    ?>
    </div>
</body>
</html>
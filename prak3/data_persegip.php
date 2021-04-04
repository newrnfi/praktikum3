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
            width: 1200px;
        }
    </style>
</head>
<body>
    <div class="bg-dark p-4">
    <h2 class="mt-2 text-light bg-dark">Menghitung Persegi Panjang</h2>
    </div>
    <div class="mx-4">
    <hr class="mb-0 mt-0">
    
    <form class="form-horizontal">
    <fieldset>

    <!-- Form Name -->
    <legend>Persegi Panjang</legend>
    <hr class="mb-2 mt-0">
    <div class="isi">
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Panjang </label>
            <div class="col-sm-10">
            <input type="text" name="panjang" class="form-control" id="">
        </div>
        </div>
        <div class="form-group">
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label">Lebar </label>
            <div class="col-sm-10">
            <input type="text" name="lebar" class="form-control" id="">
        </div>
        </div>
        <div class="form-group row mb-2">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
            <input type="submit" class="btn btn-primary"/>
        </div>
    </div>
    </fieldset>
    </form>
    <br/>
<?php
require_once "class_persegip.php";
$panjang = $_GET['panjang'];
$lebar = $_GET['lebar'] ;
if ($panjang) {
    $pp = new persegip($panjang, $lebar );
    echo '<div class="isi">Luas Persegi Panjang : ',$pp->getLuas();
    echo "<br/>";
    echo 'Keliling Persegi Panjang : ',$pp->getKeliling().'</div>';
}
?>
</tbody> 
</table>
</div>
</body>
</html>
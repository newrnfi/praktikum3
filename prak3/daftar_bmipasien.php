<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-light bg-dark p-4">Data BMI Pasien</h3>
    <table class="table table-bordered mx-auto" style="width: 1200px;"> 
    <thead>
    <tr>
    <th>No</th><th>Nama</th><th>Gender</th><th>Umur</th>
    <th>Berat (kg)</th><th>Tinggi (cm)</th><th>BMI</th><th>Hasil</th>
    </tr> 
    </thead>
    <tbody>
    <tr>
    <td>1</td>
    <td>Nailah Salsabila</td>
    <td>Perempuan</td>
    <td>17</td>
    <td>65</td>
    <td>165</td>
    <td>24</td>
    <td>Normal (Ideal)</td>
    </tr>
    <tr>
    <td>2</td>
    <td>Fajar Buana</td>
    <td>Laki-laki</td>
    <td>21</td>
    <td>70</td>
    <td>170</td>
    <td>24</td>
    <td>Normal (Ideal)</td>
    </tr>
    <?php
    require_once "class_bmipasien.php";
    $nomor = 3;
    echo '<tr><td>'.$nomor.'</td>';
    echo '<td>'.$_POST['nama'].'</td>';
    echo '<td>'.$_POST['jk'].'</td>';
    echo '<td>'.$_POST['umur'].'</td>';
    echo '<td>'.$_POST['berat'].'</td>';
    echo '<td>'.$_POST['tinggi'].'</td>';
    echo '<td>'.number_format($bmi).'</td>';
    echo '<td>'.$status.'</td>';
    echo '<tr/>';
    $nomor++;
    
    ?>
    </tbody> 
    </table>
</body>
</html>
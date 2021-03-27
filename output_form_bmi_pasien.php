<?php
if (!isset($_POST['jk'])) {
  header('Location: form_bmi_pasien.php');
}

require_once 'class_bmipasien.php';

$bmi = new BmiPasien($_POST['nama'], $_POST['umur'], $_POST['jk'], $_POST['berat'], $_POST['tinggi']);
$hasilBMI = $bmi->hasilBMI();
$statusBMI = $bmi->statusBMI();
$rowColor = $bmi->getRowColour();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Output Form BMI</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>

  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-12">
        <div class="d-flex justify-content-center">
          <div class="card">
            <div class="card-header <?= $rowColor ?>">
              <h3 class="card-title">Output Form Indeks Massa Tubuh (BMI)</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="d-flex justify-content-center">Hasil Evaluasi BMI</div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-12">
                  <div class="d-flex justify-content-center">
                    <table>
                      <tr>
                        <td>Nama</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td><?= $bmi->nama . ' (' . (($bmi->jk == 'laki') ? 'Laki-Laki' : 'Perempuan') . ') ' ?></td>
                      </tr>
                      <tr>
                        <td>Berat/Tinggi Badan</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td><?= $bmi->berat . 'kg/' . $bmi->tinggi . 'cm' ?></td>
                      </tr>
                      <tr>
                        <td>Umur</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td><?= $bmi->umur . 'Tahun' ?></td>
                      </tr>
                      <tr>
                        <td>BMI</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td><?= $hasilBMI ?></td>
                      </tr>
                      <tr>
                        <td>Hasil</td>
                        <td>&nbsp; : &nbsp;</td>
                        <td><?= $statusBMI ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
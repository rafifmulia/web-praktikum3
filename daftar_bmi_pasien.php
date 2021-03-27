<?php
require_once 'class_bmipasien.php';

$data_bmi = [
  ['nama' => 'rafif0', 'umur' => 20, 'jk' => 'laki', 'berat' => 40, 'tinggi' => 164],
  ['nama' => 'rafi1', 'umur' => 20, 'jk' => 'laki', 'berat' => 60, 'tinggi' => 164],
  ['nama' => 'rafif2', 'umur' => 20, 'jk' => 'laki', 'berat' => 80, 'tinggi' => 164],
  ['nama' => 'rafif3', 'umur' => 20, 'jk' => 'laki', 'berat' => 120, 'tinggi' => 164],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data BMI</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>

  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-12">
        <div class="">
          <div class="card">
            <div class="card-header bg-info text-white">
              <h3 class="card-title">Data Indeks Massa Tubuh (BMI)</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover table-bordered">
                      <thead>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Gender</th>
                        <th>Umur</th>
                        <th>Berat (Kg)</th>
                        <th>Tinggi (cm)</th>
                        <th>BMI</th>
                        <th>Hasil</th>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($data_bmi as $i => $row) {
                          $bmi = new BmiPasien($row['nama'], $row['umur'], $row['jk'], $row['berat'], $row['tinggi']);
                          $hasil = $bmi->hasilBMI();
                          $status = $bmi->statusBMI();
                          $rowColour = $bmi->getRowColour();
                        ?>
                        <tr class="<?= $rowColour ?>" style="opacity:0.9;">
                          <td><?= $i+1 ?></td>
                          <td><?= $bmi->nama ?></td>
                          <td><?= (strtolower($bmi->jk) == 'laki') ? 'Laki-Laki' : 'Perempuan' ?></td>
                          <td><?= $bmi->umur ?></td>
                          <td><?= $bmi->berat ?></td>
                          <td><?= $bmi->tinggi ?></td>
                          <td><?= $hasil ?></td>
                          <td><?= $status ?></td>
                        </tr>
                        <?php
                          }      
                        ?>
                      </tbody>
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Isian BMI</title>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
</head>

<body>

  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-6">
        <div class="card">
          <div class="card-header bg-info text-white">
            <h3 class="card-title">Form Isian Indeks Massa Tubuh (BMI)</h3>
          </div>
          <div class="card-body">
            <form action="output_form_bmi_pasien.php" method="post">
              <div class="row">
                <div class="col-4 text-left">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                  </div>
                  <div class="form-group">
                    <label>Berat Badan</label>
                  </div>
                  <div class="form-group">
                    <label>Tinggi Badan</label>
                  </div>
                  <div class="form-group">
                    <label>Umur</label>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                  </div>
                </div>
                <div class="col-8 text-left">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                      </div>
                      <input type="text" name="nama" class="form-control" size="30" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-anchor"></i></span>
                      </div>
                      <input type="text" name="berat" class="form-control" size="4" required>
                      <div class="input-group-prepend">
                        <span class="input-group-text">Kg</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-blind"></i></span>
                      </div>
                      <input type="text" name="tinggi" class="form-control" size="3" required>
                      <div class="input-group-prepend">
                        <span class="input-group-text">cm</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-bell"></i></span>
                      </div>
                      <input type="text" name="umur" class="form-control" size="2" required>
                      <div class="input-group-prepend">
                        <span class="input-group-text">Thn</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jk" value="laki" required>
                      <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jk" value="perempuan" required>
                      <label class="form-check-label">Perempuan</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
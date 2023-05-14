<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">BMI</li>
            </ol>
            <div class="row">
          <div class="col-md-12">
        <form>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form BMI Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
    <div class="container">
        <form method="POST">
        <br>
            <h2 class="text-center">Data Pasien</h2>
        <br>
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div> 
                  <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap" type="text" class="form-control" required="required">
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="umur" class="col-4 col-form-label">Umur</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-birthday-cake"></i>
                    </div>
                  </div> 
                  <input id="umur" name="umur" placeholder="Masukkan Umur" type="text" class="form-control" required="required"> 
                  <div class="input-group-append">
                    <div class="input-group-text">tahun</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4">Jenis Kelamin</label> 
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki" required="required"> 
                  <label for="jk_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan" required="required"> 
                  <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="bb" class="col-4 col-form-label">Berat Badan</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-dashboard"></i>
                    </div>
                  </div> 
                  <input id="bb" name="bb" placeholder="Masukkan Berat Badan" type="number" class="form-control" required="required"> 
                  <div class="input-group-append">
                    <div class="input-group-text">kg</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group row">
              <label for="tb" class="col-4 col-form-label">Tinggi Badan</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-street-view"></i>
                    </div>
                  </div> 
                  <input id="tb" name="tb" placeholder="Masukkan Tinggi Badan" type="number" class="form-control" required="required"> 
                  <div class="input-group-append">
                    <div class="input-group-text">cm</div>
                  </div>
                </div>
              </div>
            </div> 

            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
        </form>
    
        <hr>
        <br>

        <table class="table table-bordered text-center">
            <tr class="table-warning">
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Hasil BMI</th>
                <th>Keterangan </th>
            </tr>
            
            <tr>
            <?php 
            include('BMI_class.php');
            $data_pasien = array();

            if(isset($_POST['submit'])){
              $nama = $_POST['nama'];
              $umur = $_POST['umur'];
              $jk = $_POST['jk'];
              $bb = $_POST['bb'];
              $tb = $_POST['tb'];
          
              $pasien = new BMI($nama, $umur, $jk, $bb, $tb);
              array_push($data_pasien, $pasien);
            }

            if (!empty($data_pasien)){
              foreach ($data_pasien as $pasien){
                $nama = $pasien->nama;
                echo "<td>" . $nama . "</td>";
                $umur = $pasien->umur;
                echo "<td>" . $umur . " tahun </td>";
                $jk = $pasien->jk;
                echo "<td>" . $jk . "</td>";
                $bb = $pasien->bb;
                echo "<td>" . $bb . " kg </td>";
                $tb = $pasien->tb;
                echo "<td>" . $tb . " cm </td>";
                $bmi = $pasien->getBMI();
                echo "<td>" . $bmi. "</td>";
                $ket_bmi = $pasien->getKetBMI();
                echo "<td>" . $ket_bmi . "</td>";
              }
            }
            ?>
            </tr>
        </table>
        <br>
        <hr>
        <br>
        <footer></footer>
        <br>
    </div>
</body>
</html>
        </from>
    </main>
    
        
<?php include_once('footer.php'); ?>
<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php 
include_once('database.php');
$data = $db->query("SELECT * FROM pembelian WHERE id='$_GET[id]'");
$pembelian = $data->fetch();
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Input Pembelian</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="update_pembelian.php">
                                    <div class="form-group row">
                                        <label for="nomor" class="col-4 col-form-label">nomor</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $pembelian['nomor'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-4 col-form-label">tanggal</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="tanggal" name="tanggal" type="text" class="form-control" value="<?= $pembelian['tanggal'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="produk_id" class="col-4 col-form-label">produk_id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="produk_id" name="produk_id" type="text" class="form-control" value="<?= $pembelian['produk_id'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah" class="col-4 col-form-label">jumlah</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="jumlah" name="jumlah" type="text" class="form-control" value="<?= $pembelian['jumlah'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga" class="col-4 col-form-label">harga</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="harga" name="harga" type="text" class="form-control" value="<?= $pembelian['harga'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="vendor_id" class="col-4 col-form-label">vendor_id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="vendor_id" name="vendor_id" type="text" class="form-control" value="<?= $pembelian['vendor_id'] ?>">
                                        </div>
                                        </div>
                                    </div>
                                    
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <input type="hidden" name="id" value="<?=$_GET['id']?>">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                        </div>
                  </div>
              </div>
          </div>
        </div>
        </div>
    </main>
<?php include_once('footer.php'); ?>



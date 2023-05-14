<?php 
    include_once('navbar.php'); 
    include_once('sidebar.php'); 
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">from belanja</li>
            </ol>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="fromb.php">
                        <div class="form-group row">
                            <label for="costum" class="col-4 col-form-label">Customer</label> 
                            <div class="col-8">
                                <input id="costum" name="customer" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Pilih produk</label> 
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Televisi"> 
                                    <label for="produk_0" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin"> 
                                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                    <?php
                        $customer = $_POST["customer"] ?? "";
                        $produk = $_POST["produk"] ?? "";
                        $jumlah = $_POST["jumlah"] ?? "";
                        
                        if ($produk == "Televisi") {
                            $harga = 4200000;
                        } elseif ($produk == "Kulkas") {
                            $harga = 3100000;
                        } else {
                            $harga = 3800000;
                        }
                        
                        $total = $harga * $jumlah;
                        
                        echo "Nama Customer: " . $customer . "<br/>";
                        echo "Produk Pilihan: " . $produk . "<br/>";
                        echo "Jumlah Beli: " . $jumlah . "<br/>";
                        echo "Total Belanja: " . $total . "<br/>";
                    ?>

                </div>
            </div>
        </div>
    </main>
    
    <?php include_once('footer.php'); ?>
</div>
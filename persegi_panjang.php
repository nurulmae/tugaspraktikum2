
<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">persegi panjang</li>
            </ol>
            <div class="row">
          <div class="col-md-12">
        <form><?php
class persegi{
    public $panjang; 
    public $lebar; 
   
    function __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;

    }
    function keliling(){
        $keliling = 2 * ($this->lebar + $this->panjang);
        echo "keliling persegi adalah $keliling <br>";

    }
    function luas(){
        $luas = ( $this->panjang * $this->lebar);
        echo "luas persegi adalah $luas";

    }

}
$persegi = new persegi(7,14);
$persegi->keliling();
$persegi->luas();
?></from>
</main>

    
<?php include_once('footer.php'); ?>
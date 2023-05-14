<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php 
include_once('BMI_class.php');
$data = $db->query("SELECT * FROM bmi WHERE id='$_GET[id]'");
$bmi = $data->fetch();
?>
<div id="layoutSidenav_content">
    <main>
        <?php 

ob_start();
/* Buatlah class BMI yang meiliki:
    1. Property nama, umur, jenis kelamin, berat badan, tinggi badan
    2. Method hasilBMI, statusBMI
*/

    class BMI{
      public $nama;
      public $umur;
      public $jk;
      public $tb;
      public $bb;

      public function __construct($nama, $umur, $jk, $bb, $tb){
          $this->nama = $nama;
          $this->umur = $umur;
          $this->jk = $jk;
          $this->bb = $bb;
          $this->tb = $tb;
      }
        
      public function getBMI(){
          $tb = $this->tb / 100;
          $bmi = $this->bb / ($tb * $tb);
          return number_format($bmi, 2);
      }

      public function getKetBMI(){
          $bmi = $this->getBMI();
          if ($bmi < 19) {
              return 'Kekurangan berat badan';
          } else if ($bmi < 25) {
              return 'Normal (Ideal)';
          } else if ($bmi < 30) {
              return 'Kelebihan berat badan';
          } else {
              return 'Obesitas';
          }
      }
    }
?>
        </from>
    </main>
    
        
<?php include_once('footer.php'); ?>
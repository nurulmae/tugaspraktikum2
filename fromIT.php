<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">From IT club</li>
            </ol>
            <div class="row">
          <div class="col-md-12">
        
        <div class="container">
   
   <?php
   $ar_prodi = ["SI" => "Sistem informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
   $ar_skill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
   $ar_domisili = ["Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi", "Lainnya"]

       ?>     <h2>Form Registrasi IT Club</h2>
   <hr>
   <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
       <div class="form-group row">
           <label for="nim" class="col-4 col-form-label">NIM</label>
           <div class="col-8">
               <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control">
           </div>
       </div>
       <div class="form-group row">
           <label for="nama" class="col-4 col-form-label">Nama</label>
           <div class="col-8">
               <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
           </div>
       </div>
       <div class="form-group row">
           <label class="col-4">Jenis Kelamin</label>
           <div class="col-8">
               <div class="custom-control custom-radio custom-control-inline">
                   <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki">
                   <label for="gender_0" class="custom-control-label">Laki-laki</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                   <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan">
                   <label for="gender_1" class="custom-control-label">Perempuan</label>
               </div>
           </div>
       </div>
       <div class="form-group row">
           <label for="matkul" class="col-4 col-form-label">Program Studi</label>
           <div class="col-8">
               <select id="prodi" name="prodi" class="custom-select">
                   <?php
                   foreach ($ar_prodi as $k => $v) {
                       echo "<option value='$k'>$v</option>";
                   }
                   ?>
               </select>
           </div>
       </div>
       <div class="form-group row">
           <label class="col-4">Skill Programming</label>
           <div class="col-8">
               <?php
               foreach ($ar_skill as $k => $v) {
                   echo "<div class='custom-control custom-checkbox custom-control-inline'>";
                   echo "<input name='skill[$k]' id='$k' type='checkbox' class='custom-control-input'
                           value='$v'>";
                   echo "<label for='$k' class='custom-control-label'>$k</label>";
                   echo "</div>";
               } ?>
           </div>
       </div>
       <div class="form-group row">
           <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
           <div class="col-8">
               <select id="domisili" name="domisili" class="custom-select">
                   <?php
                   foreach ($ar_domisili as $dom) {
                       echo "<option value='$dom'>$dom</option>";
                   }
                   ?>
               </select>
           </div>
       </div>
       <div class="form-group row">
           <label for="email" class="col-4 col-form-label">Email</label>
           <div class="col-8">
               <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control">
           </div>
       </div>
       <div class="form-group row">
           <div class="offset-4 col-8">
               <button name="submit" type="submit" class="btn btn-primary">Submit</button>
           </div>
       </div>
   </form>
</div>


<?php
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$gender = $_POST["gender"];
$skill = $_POST["skill"];
$domisili = $_POST["domisili"];
$email = $_POST["email"];

function total($skill){
   $total = 0;
   foreach($skill as $k => $v){
       $total = $k;
   }

   return $total;
}
$skor_total = total($skill);


// function skor_skill($skills)
// {
//     $skill_list = [
//         'HTML' => 10,
//         'CSS' => 10,
//         'JavaScript' => 20,
//         'RWD Bootsrap' => 20,
//         'PHP' => 30,
//         'Python' => 30,
//         'Java' => 50,
//     ];

//     $result = 0;
//     foreach ($skills as $skill) {
//         $result = $result + $skill_list[$skill];
//     }
//     return $result;
// }

function kategori_skill($skill)
{
   if ($skill >= 40) {
       return "Kurang";
   } elseif ($skill >= 60) {
       return "Menengah";

   } elseif ($skill >= 100) {
       return "Menengah";
   } elseif ($skill >= 60) {
       return "Menengah";
   } else {
       return "Mahir";
   }
}
echo "NIM : $nim";
echo "<br> Nama : $nama";
echo "<br> Program Studi : $prodi";
echo "<br> Jenis Kelamin : $gender";
echo "<br> Skill Programming : ";
foreach ($skill as $skil) {
   echo $skil . ", ";
}
echo "<br> Tempat Domisili : $domisili";
// echo "<br> Skor Skill : " . skor_skill($skills);
echo "<br> Email : $email";

?>
</body>

</html>
    </main>
    
        
<?php include_once('footer.php'); ?>
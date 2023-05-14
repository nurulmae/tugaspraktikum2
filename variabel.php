<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">variabel</li>
            </ol>
            <div class="row">
          <div class="col-md-12">
        <form>
        <?php
        // definisikan variables
        $nama = 'noah scnap';
        $umur = 19;
        $negara = 'newyork';
        $pekerjaan = 'aktor';
        $hobi = 'bermain game';

        echo 'Nama : ' . $nama;
        echo '<br/>Umur : ' . $umur.' Tahun';
        echo '<br/>asal : ' . $negara.' US';
        echo '<br/>pekerjaan : '.$pekerjaan.' ';
        echo '<br/>hobi :' .$hobi; 
                

        
        echo "<br>";
        echo "nama saya adalah ".$nama.", saya usia ".$umur.",asal saya dari ".$negara.",dan saya bekerja sebagai ".$pekerjaan.
                    ", hobi saya adalah ".$hobi.".";
            ?>
            
            
            <?php
                // variabel user //
                $nama = "emma mayrs";
                $usia = 20;
                $negara = "florida";
                $pekerjaan = "aktris";
                $hobi = "membaca buku";

                echo '<br/>nama :' .$nama; 
                echo '<br/>umur : ' . $usia;
                echo '<br/>asal : ' . $negara.' US';
                echo '<br/>pekerjaan : '.$pekerjaan.' ';
                echo '<br/>hobi :' .$hobi; 
                


                echo "<br>";

                echo "nama saya adalah ".$nama.", saya usia ".$usia.",asal saya dari ".$negara.",dan saya bekerja sebagai ".$pekerjaan.
                    ", hobi saya adalah ".$hobi.".";

               ?> 

            
            </from>
                </main>
                
                    
            <?php include_once('footer.php'); ?>

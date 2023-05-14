<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">array</li>
            </ol>
            <div class="row">
          <div class="col-md-12">
        <form><?php

$mahasiswa = ["yaqub qamar ad-din dibiazah", "khalid kashmiri", "khidar kharawita", "ismail ahmad qanabawi", "usman abdul jalil", "muhammad sumbul"];

// sort //
sort($mahasiswa);
foreach($mahasiswa as $p){
    echo $p."<br>";
}
echo "<br>";

// arsort //
arsort($mahasiswa);
foreach($mahasiswa as $p){
    echo $p."<br>";
}

// push //
array_push($mahasiswa, "udin");

echo "<br>";

foreach($mahasiswa as $p){
    echo $p."<br>";
}

// unshift //
array_unshift($mahasiswa, "nidu");
foreach($mahasiswa as $p){
    echo $p."<br>";
}

?></from>
    </main>
    
        
<?php include_once('footer.php'); ?>
<?php 
include_once("database.php");

$db->query("INSERT INTO kartu VALUE ('','$_POST[kode]','$_POST[nama]','$_POST[diskon]','$_POST[iuran]')");
header("location: list_kartu.php");
?>




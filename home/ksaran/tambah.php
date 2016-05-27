<?php
$id   = $_POST['i'];
$kategori = $_POST['u'];
?>
<?php
require_once"../../private/db/conn.php";
$sql_simpan=$amorpdo->prepare("insert into  ksaran(nama,ksaran)
values ('$id','$kategori')");
$sql_simpan->execute();
require_once"tampil.php";
?>

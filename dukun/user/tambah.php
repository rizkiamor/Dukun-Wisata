<?php
$id   = $_POST['i'];
$usera = $_POST['u'];
$pass = $_POST['p'];
$nama = $_POST['k'];
?>
<?php
require_once"../../private/db/conn.php";
$sql_simpan=$amorpdo->prepare("insert into  admin(ID_ADMIN,NAMA_ADMIN,USER,PASS)
values ('$id','$nama','$usera','$pass')");
$sql_simpan->execute();
require_once"tampil.php";
?>

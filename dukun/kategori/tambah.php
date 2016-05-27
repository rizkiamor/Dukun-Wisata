<?php
$id   = $_POST['i'];
$kategori = $_POST['u'];
?>
<?php
require_once"../../private/db/conn.php";
$sql_simpan=$amorpdo->prepare("insert into  kategori_post(ID_KATEGORI,KATEGORI)
values ('$id','$kategori')");
$sql_simpan->execute();
require_once"tampil.php";
?>

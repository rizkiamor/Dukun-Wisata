<?php
$id   = $_POST['i'];
$kategori = $_POST['k'];
$admin = $_POST['a'];
$judul = $_POST['j'];
$isi = $_POST['s'];
$foto = $_POST['f'];
$f = '../public/img/'.$foto.'.jpg';
$d=(date('Y-m-d'));
?>
<?php
require_once"../../private/db/conn.php";
$sqlsim=$amorpdo->prepare("insert into  posting(ID_POST,KATEGORI,ADMIN,JUDUL_POST,ISI_POST,FOTO,TGL_POST)
values ('$id','$kategori','$admin','$judul','$isi','$f','$d')");
$sqlsim->execute();
require_once"tampil.php";
?>

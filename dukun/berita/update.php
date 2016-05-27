<?php
$id   = $_POST['i'];
$kategori = $_POST['k'];
$admin = $_POST['a'];
$judul = $_POST['j'];
$isi = $_POST['s'];
$foto = $_POST['f'];
$f = 'public/img/'.$foto.'.jpg';
$d=(date('Y-m-d'));
?>
<?php
require_once"../../private/db/conn.php";
$sqlsim=$amorpdo->prepare("UPDATE posting SET
            KATEGORI='$kategori',
            ADMIN   ='$admin',
            JUDUL_POST   ='$judul',
            ISI_POST   ='$isi',
            FOTO   ='$foto',
            TGL_POST   ='$d'
				    WHERE ID_POST='$id'");
$sqlsim->execute();
?>
<?php
require_once"tampil.php";
?>

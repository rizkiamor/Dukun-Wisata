<?php
require_once"../../private/db/conn.php";
$kd=$_POST['kdhapus'];
$hapus=$amorpdo->prepare("DELETE FROM admin WHERE ID_ADMIN='$kd'");
$hapus->execute();
require_once"tampil.php";
?>

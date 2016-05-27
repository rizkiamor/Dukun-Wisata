<?php
require_once"../../private/db/conn.php";
$kd=$_POST['kdhapus'];
$hapus=$amorpdo->prepare("DELETE FROM posting WHERE ID_POST='$kd'");
$hapus->execute();
require_once"tampil.php";
?>

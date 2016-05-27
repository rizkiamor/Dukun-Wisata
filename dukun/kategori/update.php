<?php
$id   = $_POST['i'];
$ktg = $_POST['u'];
?>
<?php
require_once"../../private/db/conn.php";
$sql_simpan=$amorpdo->prepare("UPDATE kategori_post SET
            KATEGORI='$ktg'
				    WHERE ID_KATEGORI='$id'");

$sql_simpan->execute();
?>
<?php
require_once"tampil.php";
?>

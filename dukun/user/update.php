<?php
$id   = $_POST['i'];
$usera = $_POST['u'];
$pass = $_POST['p'];
$nama = $_POST['k'];
?>
<?php
require_once"../../private/db/conn.php";
$sql_simpan=$amorpdo->prepare("UPDATE admin SET
            NAMA_ADMIN='$nama',
            USER='$usera',
				    PASS='$pass'
				    WHERE ID_ADMIN='$id'");

$sql_simpan->execute();
?>
<?php
require_once"tampil.php";
?>

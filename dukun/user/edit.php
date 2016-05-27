<?php
require_once"../../private/db/conn.php";
$kd = $_POST['kdedit'];
$pdoubah=$amorpdo->prepare("select*from admin where ID_ADMIN='$kd' ");
$pdoubah->execute();
$ubah=$pdoubah->fetch();
?>
<input type="hidden" name="id" id="id" value="<?php echo $ubah['ID_ADMIN']; ?>">
<input type="text" name="user" id="user" value="<?php echo $ubah['USER'] ?>">
<input type="text" name="pass" id="pass" value="<?php echo $ubah['PASS'] ?>">
<input type="text" name="nama" id="nama" value="<?php echo $ubah['NAMA_ADMIN'] ?>">
<p>
<input type="button" value="Update" onclick="userupdate()">
<input type="reset" value="Batal" onclick="user()">

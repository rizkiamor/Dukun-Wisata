<?php
require_once"../../private/db/conn.php";
$kd = $_POST['kdedit'];
$pdoubah=$amorpdo->prepare("select*from kategori_post where ID_KATEGORI='$kd' ");
$pdoubah->execute();
$ubah=$pdoubah->fetch();
?>
<input type="text" name="id" id="id" value="<?php echo $ubah['ID_KATEGORI'] ?>">
<input type="text" name="kategoria" id="kategoria" value="<?php echo $ubah['KATEGORI'] ?>">
<p>
<input type="button" value="Update" onclick="kategoriupdate()">
<input type="reset" value="Batal" onclick="kategori()">

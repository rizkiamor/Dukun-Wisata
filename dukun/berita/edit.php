<?php
require_once"../../private/db/conn.php";
$kd = $_POST['kdedit'];
$pdoubah=$amorpdo->prepare("select*from posting where ID_POST='$kd' ");
$pdoubah->execute();
$ubah=$pdoubah->fetch();
?>
<input type="hidden" name="id" id="id" value="<?php echo $ubah['ID_POST']; ?>">
<select name="kategorias" id="kategorias">
  <option><?php echo $ubah['KATEGORI']; ?></option>
  <?php
  $ktg=$amorpdo->prepare("select* from kategori_post");
  $ktg->execute();
  foreach ($ktg as $ktg) { ?>
  <option value="<?php echo $ktg['ID_KATEGORI'];?>"><?php echo $ktg['KATEGORI'];?></option>
  <?php } ?>
</select>
<input type="hidden" name="admin" id="admin" value="<?php echo $ubah['ID_ADMIN'] ?>">
<input type="text" name="judul" id="judul" value="<?php echo $ubah['JUDUL_POST'];?>">
  <input type="text" name="foto" id="foto" value="<?php echo $ubah['FOTO'];?>">
<textarea id="isiku" placeholder="ISI BERITA"><?php echo $ubah['ISI_POST'];?></textarea>
<p>
<input type="button" value="Update" onclick="beritaupdate()">
<input type="reset" value="Batal" onclick="berita()">

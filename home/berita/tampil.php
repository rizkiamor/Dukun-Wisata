<?php  $baca = $_POST['kbaca'];?>
<?php
require_once"../../private/db/conn.php";
$pdoubah=$amorpdo->prepare("select*from posting where ID_POST='$baca' ");
$pdoubah->execute();
$baca=$pdoubah->fetch();
 ?>

<div class="kibaca">
<div class="imgbaca">
<?php echo '<center><img class="preview" width="100%" alt="" src="'.$baca['FOTO'].'" />'; ?>
<div class="tglbaca">
Tanggal : <?php echo $baca['TGL_POST'];?>
</div>
<div class="penulis">
Penulias : <?php echo $baca['ADMIN'];?>
</div>
<div class="ktgbaca">
Kategori : <?php echo $baca['KATEGORI'];?>
</div>
</div>
</div>
<div class="kabaca">
<?php echo $baca['ISI_POST']; ?>
</div>

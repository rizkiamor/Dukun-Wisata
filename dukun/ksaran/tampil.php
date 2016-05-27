
<table border="0">
<td>ID KATEGORI</td><td>NAMA KATEGORI</td><td></td><td>
  <?php
  require_once"../../private/db/conn.php";
  ?>
  <?php
  $pdo=$amorpdo->prepare("select* from kategori_post");
  $pdo->execute();
  while($tampil=$pdo->fetch()){
    $id=$tampil['ID_KATEGORI'];
    $ktg=$tampil['KATEGORI'];
  ?>
<tr>
<td><?php echo $id; ?></td><td><?php echo $ktg; ?></td><td width="5%">
<div class="kmenu"><button value="<?php echo $id; ?>" onclick="useredit(this.value)"><i class="fa fa-pencil-square-o"></i></button></div>
</td><td width="5%">
<div class="kmenu"><button value="<?php echo $id; ?>" onclick="userhapus(this.value)"><i class="fa fa-remove"></i></button></div>
</td></tr>
<?php } ?>
</table>

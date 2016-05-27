
<table border="0">
<td>IMG</td><td>FOTO</td><td></td>
  <?php
  require_once"../../private/db/conn.php";
  ?>
  <?php
  $pdo=$amorpdo->prepare("select* from foto");
  $pdo->execute();
  while($tampil=$pdo->fetch()){
    $id=$tampil['FOTO'];
  ?>
<tr>
<td><?php echo '<center><img class="preview" width="40%" alt="" src="'.$id.'" />'; ?></td>
<td><?php echo $id; ?></td>
<td width="5%">
<div class="kmenu"><button value="<?php echo $id; ?>" onclick="userhapus(this.value)"><i class="fa fa-remove"></i></button></div>
</td></tr>
<?php } ?>
</table>

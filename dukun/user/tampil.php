
<table border="0">
<td>USERMANE</td><td>PASSWORD</td><td>NAMA</td><td></td><td>
  <?php
  require_once"../../private/db/conn.php";
  $pdo=$amorpdo->prepare("select* from admin");
  $pdo->execute();
  while($tampil=$pdo->fetch()){
    $id1=$tampil['ID_ADMIN'];
    $nama1=$tampil['NAMA_ADMIN'];
    $user1=$tampil['USER'];
    $pass1=$tampil['PASS'];
  ?>
<tr>
<td><?php echo $user1; ?></td><td><?php echo $pass1; ?></td><td><?php echo $nama1; ?></td><td width="5%">
  <div class="kmenu"><button value="<?php echo $id; ?>" onclick="useredit(this.value)"><i class="fa fa-pencil-square-o"></i></button></div>
  </td><td width="5%">
  <div class="kmenu"><button value="<?php echo $id; ?>" onclick="userhapus(this.value)"><i class="fa fa-remove"></i></button></div>
  </td></tr>
<?php } ?>
</table>

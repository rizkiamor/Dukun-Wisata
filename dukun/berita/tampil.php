<table border="0">
<td>ID KATEGORI</td><td>NAMA KATEGORI</td><td></td><td>
<?php
require_once"../../private/db/conn.php";
require_once"../../private/db/autocode.php";
$number=$amorpdo->prepare("select*from posting ORDER BY ID_POST DESC LIMIT 1");
$number->execute();
$nume=$number->fetch();
$autono=$nume['ID_POST'];
if ($autono==null) {
   $data=autonumber('POST01', 4, 2);
 }else {
   $data=autonumber($autono, 4, 2);
 }
?>
<?php
$pdo=$amorpdo->prepare("select* from posting");
$pdo->execute();
foreach ($pdo as $show) {
?>
<tr>
<td><?php echo $show['JUDUL_POST']; ?></td><td><?php echo $show['TGL_POST']; ?></td>
<td width="5%">
<div class="kmenu"><button value="<?php echo $show['ID_POST']; ?>" onclick="beritaedit(this.value)"><i class="fa fa-pencil-square-o"></i></button></div>
</td><td width="5%">
<div class="kmenu"><button value="<?php echo $show['ID_POST']; ?>" onclick="beritahapus(this.value)"><i class="fa fa-remove"></i></button></div>
</td></tr>
<?php } ?>
</table>

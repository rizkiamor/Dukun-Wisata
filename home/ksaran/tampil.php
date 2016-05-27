<?php
require_once"../../private/db/conn.php";
$pdo=$amorpdo->prepare("select* from ksaran");
$pdo->execute();
foreach ($pdo as $tampil) {
$nama=$tampil['nama'];
$ksaran=$tampil['ksaran'];
?>
<div class="kisi">
<div class="bkisi">
<div class="akisi">
<?php echo '<i class="fa fa-reddit-alien"></i> '.$nama.'&nbsp;<i class="fa fa-terminal"></i>&nbsp;'.$ksaran; ?>
</div></div></div>
<?php } ?>

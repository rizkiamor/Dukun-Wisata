
<div class="aksaran">
<div id="tampil">
<?php
require_once"../private/db/conn.php";
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
</div>
</div>
<div class="akkanan">
  <div class="fuser">
  FORM KRITIK & SARAN
  </div>
  <div class="submit">
  <div id="lihat">
  <input type="text" name="nama" id="nama" placeholder="NAMA">
  <input type="text" name="saran" id="saran" placeholder="ISI SARAN">
  <p>
  <input type="button" value="Tambah" onclick="ksarantambah()">
  <input type="reset" value="Batal" onclick="ksaran()">
</div>

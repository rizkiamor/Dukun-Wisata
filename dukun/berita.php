<div class="wuser">
<div class="tuser">
MAIN MENU - BERITA
</div></div>
<div class="berita">
  <div id="tampil">
  <table border="0">
  <td>ID KATEGORI</td><td>NAMA KATEGORI</td><td></td><td>
  <?php
  require_once"../private/db/conn.php";
  require_once"../private/db/autocode.php";
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
</div></div>
<div class="kberita">
  <div class="fuser">
  FORM BERITA
  </div>
  <div class="submit">
  <div id="lihat">
  <input type="hidden" name="id" id="id" value="<?php echo $data; ?>">
  <select name="kategorias" id="kategorias">
    <?php
    $ktg=$amorpdo->prepare("select* from kategori_post");
    $ktg->execute();
    foreach ($ktg as $ktg) { ?>
    <option value="<?php echo $ktg['KATEGORI'];?>"><?php echo $ktg['KATEGORI'];?></option>
    <?php } ?>
  </select>
  <input type="hidden" name="admin" id="admin" value="<?php include_once"../index/session.php"; echo $user = $_SESSION['USER'];?>">
  <input type="text" name="judul" id="judul" placeholder="JUDUL POST">
  <input type="text" name="foto" id="foto" placeholder="FOTO">
  <textarea id="isiku" placeholder="ISI BERITA"></textarea>
  <p>
  <input type="button" value="Tambah" onclick="beritatambah()">
  <input type="reset" value="Batal" onclick="berita()">

  <div class="tfoto">
  <a href="foto" target="_blank"><input type="button" value="Tambah / Cari Foto"></a>
  </div>
</div>
</div>
</div>
</div>

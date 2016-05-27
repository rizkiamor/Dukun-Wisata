<div class="welcome">
<div class="imron">Welcome To Dukun Lte</div>
</div></div>
<div class="berita_baru">
<div class="text">BERITA BARU</div>
<div class="hskat"></div>
<div class="a_berita">
  <table>
    <?php
    require_once"../private/db/conn.php";
    ?>
    <?php
    $pdo=$amorpdo->prepare("select*from posting ORDER BY TGL_POST DESC LIMIT 5");
    $pdo->execute();
    while($tampil=$pdo->fetch()){
      $post=$tampil['JUDUL_POST'];
    ?>
  <tr>
  <td><?php echo $post; ?></td>
  </tr>
  <?php } ?>
  </table>
</div>
</div>
<div class="kategori">
  <div class="text">KATEGORI</div>
<div class="hskat">
</div>
<div class="a_kategori">
<table>
  <?php
  require_once"../private/db/conn.php";
  ?>
  <?php
  $pdo=$amorpdo->prepare("select* from kategori_post");
  $pdo->execute();
  while($tampil=$pdo->fetch()){
    $ktg=$tampil['KATEGORI'];
  ?>
<tr>
<td><?php echo $ktg; ?></td>
</tr>
<?php } ?>
</table>
</div></div>
<div class="berita_terbaik">
<div class="text">BERITA LAMA</div>
<div class="hskat"></div>
<div class="a_beribar">
  <table>
    <?php
    require_once"../private/db/conn.php";
    ?>
    <?php
    $pdo=$amorpdo->prepare("select*from posting ORDER BY TGL_POST ASC LIMIT 5");
    $pdo->execute();
    while($tampil=$pdo->fetch()){
      $post=$tampil['JUDUL_POST'];
    ?>
  <tr>
  <td><?php echo $post; ?></td>
  </tr>
  <?php } ?>
  </table>
</div>
</div>

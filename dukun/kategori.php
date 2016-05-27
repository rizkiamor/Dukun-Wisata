<div class="mkategori">
<div class="wkategori">
<div class="tkategori">
<i class="fa fa-list-ul"></i> MAIN MENU KATEGORI
</div>
</div>
<div class="akategori">
  <div id="tampil">
  <table border="0">
  <td>ID KATEGORI</td><td>NAMA KATEGORI</td><td></td><td>
    <?php
    require_once"../private/db/conn.php";
    require_once"../private/db/autocode.php";
    $number=$amorpdo->prepare("select*from kategori_post ORDER BY ID_KATEGORI DESC LIMIT 1");
    $number->execute();
    $nume=$number->fetch();
    $autono=$nume['ID_KATEGORI'];
    if ($autono==null) {
       $data=autonumber('KTG01', 3, 2);
     }else {
       $data=autonumber($autono, 3, 2);
     }
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
  <div class="kmenu"><button value="<?php echo $id; ?>" onclick="kategoriedit(this.value)"><i class="fa fa-pencil-square-o"></i></button></div>
  </td><td width="5%">
  <div class="kmenu"><button value="<?php echo $id; ?>" onclick="kategorihapus(this.value)"><i class="fa fa-remove"></i></button></div>
  </td></tr>
  <?php } ?>
  </table>
  </div>
</div>

<div class="bkategori">
  <div class="fuser">
  FORM KATEGORI
  </div>
  <div class="submit">
  <div id="lihat">
  <input type="text" name="id" id="id" value="<?php echo $data; ?>">
  <input type="text" name="kategoria" id="kategoria" placeholder="NAMA KATEGORI">
  <p>
  <input type="button" value="Tambah" onclick="kategoritambah()">
  <input type="reset" value="Batal" onclick="kategori()">
</div></div>
</div>
</div>

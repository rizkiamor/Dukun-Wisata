<div class="usera">
<div class="wuser">
<div class="tuser">
MAIN MENU - USER
</div></div>
<div class="kiuser">
<div id="tampil">
<table border="0">
<td>USERMANE</td><td>PASSWORD</td><td>NAMA</td><td></td><td>
  <?php
  require_once"../private/db/conn.php";
  require_once"../private/db/autocode.php";
  $number=$amorpdo->prepare("select*from admin ORDER BY ID_ADMIN DESC LIMIT 1");
  $number->execute();
  $nume=$number->fetch();
  $autono=$nume['ID_ADMIN'];
  if ($autono==null) {
     $data=autonumber('ADM01', 3, 2);
   }else {
     $data=autonumber($autono, 3, 2);
   }
  ?>
  <?php
  $pdo=$amorpdo->prepare("select* from admin");
  $pdo->execute();
  while($tampil=$pdo->fetch()){
    $id=$tampil['ID_ADMIN'];
    $nama=$tampil['NAMA_ADMIN'];
    $user=$tampil['USER'];
    $pass=$tampil['PASS'];
  ?>
<tr>
<td><?php echo $user; ?></td><td><?php echo $pass; ?></td><td><?php echo $nama; ?></td><td width="5%">
<div class="kmenu"><button value="<?php echo $id; ?>" onclick="useredit(this.value)"><i class="fa fa-pencil-square-o"></i></button></div>
</td><td width="5%">
<div class="kmenu"><button value="<?php echo $id; ?>" onclick="userhapus(this.value)"><i class="fa fa-remove"></i></button></div>
</td></tr>
<?php } ?>
</table>
</div>
</div>
<div class="kauser">
<div class="fuser">
FORM USER
</div>
<div class="submit">
<div id="lihat">
<input type="hidden" name="id" id="id" value="<?php echo $data; ?>">
<input type="text" name="user" id="user" placeholder="USERNAME">
<input type="text" name="pass" id="pass" placeholder="PASSWORD">
<input type="text" name="nama" id="nama" placeholder="NAMA">
<p>
<input type="button" value="Tambah" onclick="usertambah()">
<input type="reset" value="Batal" onclick="user()">
</div>
</div>
</div>
</div>

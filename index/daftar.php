<?php
$data='<div class="iskat">
<div class="circular">
</div>
<div class="fnama">
  MAMAH LONCENG
</div>
<div class="knama">
Dukun Ilmu Pengetahuan Alam
</div>
</div>';
?>
<html>
<head><title>Login : Tanya Dukun</title></head>
<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="../public/css/submit.css">
<link rel="stylesheet" href="../public/css/font_a/css/font-awesome.min.css">
<body>
<div class="main">
<form method="post" action="submit.php?=login?">
<div class="formdaftar">
<div class="ttext">FORM PENDAFTARAN</div>
<div class="submit">
<input type="text" name="nama" id="nama" placeholder="Nama">
<input type="text" name="nama" id="nama" placeholder="Nama">
<input type="text" name="nama" id="nama" placeholder="Nama">
<input type="text" name="nama" id="nama" placeholder="Nama">
<input type="text" name="nama" id="nama" placeholder="Nama">
<input type="text" name="nama" id="nama" placeholder="Nama">
<div class="skat">
<input type="submit" value="Daftar" name="daftar">
<input type="reset" value="Batal" name="batal">
</div>
</div></div>
<div class="userdaftar">
<div class="tdaftar">
DAFTAR PETUGAS
</div>
<?php
$nama = array('<div class="iskat"><div class="circular"></div><div class="fnama">MAMAH LONCENG</div><div class="knama">Dukun Ilmu Pengetahuan Alam</div></div>',
'<div class="iskat"><div class="circular"></div><div class="fnama">KI DARMO</div><div class="knama">Dukun Ilmu Sosial</div></div>',
'<div class="iskat"><div class="circular"></div><div class="fnama">EYANG KAKUNG</div><div class="knama">Dukun Ilmu Kejawen</div></div>',
'<div class="iskat"><div class="circular"></div><div class="fnama">MODEN SOLEH</div><div class="knama">Imam Masjid</div></div>');
foreach ($nama as $nama) {
  echo $nama;
}
?>
</div>
</form>
</div>
</body>
</html>

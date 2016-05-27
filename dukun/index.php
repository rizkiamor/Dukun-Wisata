<?php include_once"../index/session.php";$user = $_SESSION['USER'];
?>
<html>
<head><title>Login : Tanya Dukun</title></head>
<link rel="stylesheet" href="../public/css/style.css">
<link rel="stylesheet" href="../public/css/submit.css">
<link rel="stylesheet" href="../public/css/sweetalert.css">
<link rel="stylesheet" href="../public/css/font_a/css/font-awesome.min.css">
<body>
<div class="menus">
<div class="index"><i class="fa fa-code"></i> Amor LTE</div>
<div id="aksi">
</div>
<div class="mainmenu">
  <ul>
            <li id='beranda'><a href="javascript:void(0)" onclick="home()"><i class="fa fa-home"></i> BERANDA</a></li>
  					<li id='kategori'><a href="javascript:void(0)" onclick="kategori()"><i class="fa fa-clone"></i> KATEGORI</a></li>
  					<li id='berita'><a href="javascript:void(0)" onclick="berita()"><i class="fa fa-newspaper-o"></i> BERITA</a></li>
  					<!--<li id='pertanyaan'><a href="javascript:void(0)" onclick="pertanyaan()"><i class="fa fa-question-circle"></i> PERTANYAAN</a></li>-->
            <li id='kritik'><a href="javascript:void(0)" onclick="ksaran()"><i class="fa fa-smile-o"></i> KRITIK SARAN</a></li>
            <li id='kritik'><a href="javascript:void(0)" onclick="user()"><i class="fa fa-user"></i> ADMIN</a></li>
  					<li id='logout'><a href="../logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a></li>
          </ul>
</div>
<div class="footer"> &copy; rizki - wong edan edan | 2016
</div>
</div>
<div class="view">
<div id="isi">
<input type="hidden" class="form" name="enterTb" id="enterTb">
</div>
</div>
</body>
	<script src="../public/js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="../public/js/sweetalert.min.js" type="text/javascript"></script>
  <script src="../public/js/proses.js" type="text/javascript"></script>
</html>

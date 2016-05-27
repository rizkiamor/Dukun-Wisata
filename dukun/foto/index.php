<?php include_once"../../index/session.php";$user = $_SESSION['USER'];
?>
<html>
<head><title>Login : Tanya Dukun</title></head>
<link rel="stylesheet" href="../../public/css/style.css">
<link rel="stylesheet" href="../../public/css/submit.css">
<link rel="stylesheet" href="../../public/css/sweetalert.css">
<link rel="stylesheet" href="../../public/css/font_a/css/font-awesome.min.css">
<body>
<div class="bfoto">
<div class="submit">
  <div class="fkiri">
    <form class="uploadform" method="post" enctype="multipart/form-data" action=''>
      <input type="file" class="form-control" name="gambar" aria-describedby="sizing-addon1" />
        <input type="submit" value="Upload" name="btn-upload" id="btn-upload" class="btn btn-success btn-xs"></span>
    </div></div>
</form>
<div class="tampilfoto">
<?php
          if(isset($_POST['btn-upload'])){
            $pic = rand(1000,100000)."-".$_FILES['gambar']['name'];
            $pic_loc = $_FILES['gambar']['tmp_name'];
            $folder="../../public/img/";
            if(move_uploaded_file($pic_loc,$folder.$pic))
            {
              $picture = '../../public/img/'.$pic;
              echo '<center><a href="index.php"><img class="preview" width="10%" alt="" src="'.$picture.'" /></a>';
              require_once"../../private/db/conn.php";
              $sql_simpan=$amorpdo->prepare("insert into  foto(FOTO)
              values ('$picture')");
              $sql_simpan->execute();
            }
            else
            {

            }
    }
    ?>
  </div>
  </div>
  <div class="fkanan">
<?php include_once"list.php";?>
</div></div>
</div></div>

</body>
</html>

<?php
require_once"../private/db/conn.php";
session_start();
$USER = $_POST['username'];
$PASS = $_POST['password'];
$op = $_GET['login'];
if($op=="masuk"){
$amorlog=$amorpdo->prepare("select * from admin where USER=:USER and PASS=:PASS");
$amorlog->bindParam(':USER', $USER);
$amorlog->bindParam(':PASS', $PASS);
$amorlog->execute();
$amor = $amorlog->rowCount();
if($amor== 1){
$amor=$amorlog->fetch();
$_SESSION['USER'] = $amor['USER'];
$_SESSION['PASS'] = $amor['PASS'];
//amor HTACCESS
$homepage="homepage.html";
//amor HTACCESS END
 if($amor['USER']==$USER){
header("location:../dukun/");
}else if($amor['kategori']=='null'){
header("location:login.php");
}
}else{
header("location:../");
}
}else if($op=="out"){
unset($_SESSION['USER']);
unset($_SESSION['PASS']);
header("location:login.php");
}
?>

<?php
error_reporting(0);
session_start();
if ((!$_SESSION['USER']) AND (!$_SESSION['PASS'])){
}else {
  header("login.php");
}
?>

<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:home/');
} else {
   $username = $_SESSION['username'];
   header('location:home/');
}
?>

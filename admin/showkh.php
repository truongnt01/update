<?php
session_start();
if (isset($_SESSION['users'])) {
  include("controllers/c_khach_hang.php");
  $c_khach_hang = new c_khach_hang();
  $c_khach_hang->index();


  // kết nối dự án sử db xshop

}else {
  header('location:login.php');
}

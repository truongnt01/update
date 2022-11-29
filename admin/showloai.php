<?php
session_start();
if (isset($_SESSION['users'])) {
  include("controllers/c_loai.php");
  $c_loai = new c_loai();
  $c_loai->index();

  // kết nối dự án sử db xshop

} else {
  header('location:login.php');
}

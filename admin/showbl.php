<?php
session_start();
if (isset($_SESSION['users'])) {
  include("controllers/c_binh_luan.php");
  $c_binh_luan = new c_binh_luan();
  $c_binh_luan->index();


  // kết nối dự án sử db xshop

}else {
  header('location:login.php?Bạn chưa đăng nhập!');
}

<?php
session_start();
if (isset($_SESSION['users'])) {
  include("controllers/c_show_sp.php");
  $c_show_sp = new c_show_sp();
  $c_show_sp->index();
  // kết nối dự án sử db xshop
} else {
  header("location:login.php");
}
?>
<?php
session_start();
    include ("controllers/c_binh_luan.php");
    $edit_bl = new c_binh_luan();
    $edit_bl->edit_bl();
   
?>
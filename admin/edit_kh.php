<?php
session_start();
    include ("controllers/c_khach_hang.php");
    $edit_kh = new c_khach_hang();
    $edit_kh->edit_kh();
   
?>
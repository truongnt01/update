<?php
session_start();
    include ("controllers/c_loai.php");
    $edit_loai = new c_loai();
    $edit_loai->edit_loaih();
   
?>
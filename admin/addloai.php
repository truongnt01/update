<?php
session_start();
    include ("controllers/c_loai.php");
    $add_loai = new c_loai();
    $add_loai->add_loaih();
   
?>
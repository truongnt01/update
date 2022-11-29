<?php
session_start();
    include ("controllers/c_show_sp.php");
    $edit_sp = new c_show_sp();
    $edit_sp->editsp();
   
?>
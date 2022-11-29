<?php
session_start();
    include ("controllers/c_show_sp.php");
    $add_sp = new c_show_sp();
    $add_sp->addsp();

?>
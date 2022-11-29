<?php

class c_cart
{
    public function index()
    {
        if(!isset($_SESSION['view'])) {
            $_SESSION['view']=1;
        }
        $_SESSION['view']+=1;
        echo $_SESSION['view'];
    }
}

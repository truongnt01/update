<?php
include ("controllers/c_san_pham_ct.php");
$c_san_pham_ct = new c_san_pham_ct();
$c_san_pham_ct->index();
$c_san_pham_ct->add_binh_luan();
 
// kết nối dự án sử db xshop
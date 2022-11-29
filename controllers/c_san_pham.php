<?php 
class c_san_pham{
    public function index(){
        include ("models/m_san_pham.php");
        $m_san_pham = new m_san_pham();
        $san_phams = $m_san_pham->doc_san_pham();
        include ("models/m_loai.php");
        $m_loai = new m_loai();
        $loais = $m_loai->doc_loai();

        // mảng dữ liệu hàng hóa 
        // goij ddgd views vaof đây 
        $view = "views/san_pham/v_san_pham.php";
        include ("templates/layout.php");
    }


} 
 

?>
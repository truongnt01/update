<?php 

require_once ("database.php");
class m_hh_danh_muc extends database{
     public function doc_hh_danh_muc(){  
        $id_loai = $_GET['id_loai'];
        $sql = "select * FROM hang_hoa , loai  where hang_hoa.id_loai= loai.id_loai and   hang_hoa.id_loai = '$id_loai'  "; 
        $this ->setQuery($sql);
        // lấy dữ liệu nhiều dùng 
        return $this -> loadAllRows();
     }
}
 
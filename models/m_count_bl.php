<?php 
require_once ("database.php");
class m_count_bl extends database{
     public function doc_count_bl(){  
      $id_hh =$_GET['id_hh'];
        $sql = "select count(*) FROM binh_luan where id_hh =$id_hh"; 
        
        $this ->setQuery($sql);
        // lấy dữ liệu nhiều dùng 
        return $this -> loadAllRows();
     }
}
 
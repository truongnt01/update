<?php 
require_once ("database.php");
class m_binh_luan extends database{
     public function doc_binh_luan(){  
      $sql =  "SELECT *FROM binh_luan ";
        $this ->setQuery($sql);
        // lấy dữ liệu nhiều dùng 
        return $this -> loadAllRows();
     }
     public function read_id_bl($id_bl) {
      $sql = "select * from binh_luan where id_bl = ?";
      $this->setQuery($sql);
      return $this->loadRow(array($id_bl));
  }
  public function edit_bl()
  {
    $id_bl = $_POST['id_bl'];
    $noi_dung = $_POST['noi_dung'];
    $sql=" UPDATE binh_luan set noi_dung = '$noi_dung' where id_bl = $id_bl " ;
    $this->setQuery($sql);
    // lấy dữ liệu nhiều dùng 
    return $this->execute();
  }
     public function xoa_bl()
     {
        $id_bl = $_GET['id_bl'];
       $sql = "DELETE FROM binh_luan where id_bl=$id_bl";
   
       $this->setQuery($sql);
       // lấy dữ liệu nhiều dùng 
   
       return $this->execute();
     }

}
 
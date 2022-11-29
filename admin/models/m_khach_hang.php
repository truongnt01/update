<?php 
require_once ("database.php");
class m_khach_hang extends database{
     public function doc_khach_hang(){  
      $sql =  "SELECT *FROM khach_hang ";
        $this ->setQuery($sql);
        // lấy dữ liệu nhiều dùng 
        return $this -> loadAllRows();
     }
     public function xoa_kh()
     {
       $id_kh = $_GET['id_kh'];
       $sql = "DELETE FROM khach_hang where id_kh=$id_kh";
   
       $this->setQuery($sql);
       // lấy dữ liệu nhiều dùng 
   
       return $this->execute();
     }
     public function read_id_kh($id_kh) {
      $sql = "select * from khach_hang where id_kh = ?";
      $this->setQuery($sql);
      return $this->loadRow(array($id_kh));
  }
  public function edit_kh()
  {
  
    $id_kh = $_POST['id_kh'] ;
    $ho_ten = $_POST['ho_ten'];
    $ten_dang_nhap = $_POST['ten_dang_nhap'];
    $mat_khau = $_POST['mat_khau'];
    $email =$_POST['email'];
  
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro'];
    
    $sql = " UPDATE khach_hang set ho_ten = '$ho_ten',ten_dang_nhap = '$ten_dang_nhap',mat_khau = '$mat_khau',email = '$email',kich_hoat = '$kich_hoat',vai_tro = '$vai_tro'where id_kh =$id_kh " ;
    $this->setQuery($sql);
    // lấy dữ liệu nhiều dùng 
    return $this->execute();
  }
}    
 
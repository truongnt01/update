<?php
require_once("database.php");
class m_loai extends database
{
  public function doc_loai()
  {
    $sql =  "SELECT *FROM loai ";
    $this->setQuery($sql);
    // lấy dữ liệu nhiều dùng 
    return $this->loadAllRows();
  }
  public function add_loai($id_loai, $ten_loai)
  {
    $sql =  "INSERT INTO loai values(?,?) ";
    $this->setQuery($sql);
    // lấy dữ liệu nhiều dùng 
    return $this->execute(array($id_loai, $ten_loai));
  }
  public function read_id_loai($id_loai) {
    $sql = "select * from loai where id_loai = ?";
    $this->setQuery($sql);
    return $this->loadRow(array($id_loai));
}
public function edit_loai()
{
  $id_loai = $_POST['id_loai'];
  $ten_loai = $_POST['ten_loai'];
  $sql=" UPDATE loai set ten_loai = '$ten_loai'
   where id_loai = $id_loai " ;
  $this->setQuery($sql);
  // lấy dữ liệu nhiều dùng 
  return $this->execute();
}
  public function xoa_loai()
  {
    $id_loai = $_GET['id_loai'];
    $sql = "DELETE FROM loai where id_loai=$id_loai";

    $this->setQuery($sql);
    // lấy dữ liệu nhiều dùng 

    return $this->execute();
  }
}

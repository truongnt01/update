<?php
require_once("database.php");
class m_show_sp extends database
{
  public function doc_show_sp()
  {
    $sql =  "SELECT *FROM hang_hoa, loai where hang_hoa.id_loai=loai.id_loai ";
    $this->setQuery($sql);
    // lấy dữ liệu nhiều dùng 
    return $this->loadAllRows();
  }
  public function read_id_hh($id_hh) {
    $sql = "select * from hang_hoa where id_hh = ?";
    $this->setQuery($sql);
    return $this->loadRow(array($id_hh));
}
public function edit_sp()
{

  $id_hh = $_POST['id_hh'] ;
  $ten_hh = $_POST['ten_hh'];
  $don_gia = $_POST['don_gia'];
  $giam_gia = $_POST['giam_gia'];
  $id_loai =$_POST['id_loai'];
  $file = $_FILES['hinh'];
  $image=$_POST['hinh'];
  $ngay_nhap = $_POST['ngay_nhap'];
  $mo_ta = $_POST['mo_ta'];
  $dac_biet = $_POST['dac_biet'];
  $da_ban = $_POST['da_ban'];
  if ($file['size'] > 0) {
  $image = $file['name'];
  }
  $sql = " UPDATE hang_hoa set ten_hh = '$ten_hh',don_gia = '$don_gia',giam_gia = '$giam_gia',hinh = '$image',ngay_nhap = '$ngay_nhap',mo_ta = '$mo_ta',dac_biet = '$dac_biet',da_ban = '$da_ban',id_loai = '$id_loai'where id_hh =$id_hh " ;
  $this->setQuery($sql);
  // lấy dữ liệu nhiều dùng 
  return $this->execute();
}
  public function up_sp( $id_hh, $ten_hh,$don_gia, $giam_gia, $image,$id_loai, $dac_biet,$da_ban,$ngay_nhap, $mo_ta) {

    $sql = " INSERT INTO hang_hoa values(?,?,?,?,?,?,?,?,?,?) ";
    $this->setQuery($sql);
    // lấy dữ liệu nhiều dùng 
    return $this->execute(array(
      $id_hh, $ten_hh,
      $don_gia, $giam_gia, $image, $id_loai, $dac_biet, $da_ban, $ngay_nhap, $mo_ta
    ));
  }
  public function xoa_sp()
  {
    $id_hh = $_GET['id_hh'];
    $sql = "DELETE FROM hang_hoa where id_hh=$id_hh";

    $this->setQuery($sql);
    // lấy dữ liệu nhiều dùng 

    return $this->execute();
  }
}

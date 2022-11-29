<?php
include("models/m_user.php");
@session_start();
class c_user
{
  public function checkLogin()
  {
    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];
      $this->saveLoginSession($username, $password);
      if (isset($_SESSION['users'])) {
        //convert array std obj -> array 
        $data_user = json_decode(json_encode($_SESSION['users']), true);
        //phân quyền user vs admin
        if ($data_user[0]['vai_tro'] == '1') {
          header('location:showsp.php');
        } else {
          header("location:../../daall/index.php?Login thành công!");
        }
      } else {
        $_SESSION['error_login'] = "Sai thông tin đăng nhập";
        header("location:login.php");
      }
    }
  }

  public function logout()
  {
    unset($_SESSION['users']);
    unset($_SESSION['error_login']);
    header("location:../../daall/index.php?Logout thành công!");
  }
  public function saveLoginSession($username, $password)
  {
    $m_user = new m_user();
    $user = $m_user->read_user_by_id_pass($username, $password);
    if (!empty($user)) {
      $_SESSION['users'] = $user;
    }
  }
  
  public function checkRegister()
  {
    if (isset($_POST['create'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $username = $_POST['username'];
      $pass = $_POST['password'];
      $this->add_user($name, $username, $pass, $email);
      header("location:login.php?Đăng-kí-thành-công!");
    }
  }
  public function add_user($name, $username, $pass, $email)
  {
    $m_user = new m_user();
    $add_user = $m_user->insert_user($name, $username, $pass, $email);
  }
}

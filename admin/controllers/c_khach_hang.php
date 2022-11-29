<?php
include("models/m_khach_hang.php");
class c_khach_hang
{
    public function index()
    {

        $m_khach_hang = new m_khach_hang();
        $m_khach_hangs = $m_khach_hang->doc_khach_hang();


        // mảng dữ liệu hàng hóa 
        // goij ddgd views vaof đây 
        $view = "views/show_kh/v_khach_hang.php";
        include("templates/layout.php");
    }
    public function xoa_kh()
    {
        $id_kh = $_GET['id_kh'];
        $m_khach_hang = new m_khach_hang();
        $xoa_kh = $m_khach_hang->xoa_kh();
        $msg = "xóa kh thành công ";
        header("location:showkh.php?msg=$msg ");
        exit;
    }
    public function edit_kh()
    {

        $err = [];
        $id_kh  = $_GET['id_kh'];
        $m_khach_hang = new m_khach_hang();
        $result_id_kh = $m_khach_hang->read_id_kh($id_kh);
        if (isset($_POST['btnluu'])) {
            $id_kh = $_POST['id_kh'];
            $ho_ten = $_POST['ho_ten'];
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau = $_POST['mat_khau'];
            $email = $_POST['email'];

            $kich_hoat = $_POST['kich_hoat'];
            $vai_tro = $_POST['vai_tro'];


            if ($ho_ten == '') {
                $err['ho_ten'] = "bạn chưa nhập tên";
            }
            if ($ten_dang_nhap == '') {
                $err['ten_dang_nhap'] = "bạn chưa nhập tên đăng nhập ";
            }
            if ($mat_khau == '') {
                $err['mat_khau'] = "bạn chưa nhập mật khẩu ";
            }
            if ($email == '') {
                $err['email'] = "bạn chưa nhập email ";
            }

            if (!$err) {
                $m_khach_hang = new m_khach_hang();
                $result = $m_khach_hang->edit_kh(
                    $id_kh,
                    $ho_ten,
                    $ten_dang_nhap,
                    $mat_khau,
                    $email,
                    $kich_hoat,
                    $vai_tro 
                );
                 
                $msg = "sửa user thành công ";
                header("location:showkh.php?msg=$msg");
                exit;
            }
        }
        $view = "views/show_kh/v_edit_kh.php";
        include("templates/layout.php");
    }
}

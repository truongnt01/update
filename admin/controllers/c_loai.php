<?php
include ("models/m_show_sp.php");
include ("models/m_loai.php");
class c_loai
{
    public function index()
    {
        $m_loai = new m_loai();
        $m_loais = $m_loai->doc_loai();
        $view = "views/show_loai/v_loai.php";
        include("templates/layout.php");
    }
    public function add_loaih()
    {
        $err = [];
        if (isset($_POST['btnluu'])) {
            $id_loai = NULL;
            $ten_loai = $_POST['ten_loai'];
           
            if ($ten_loai == '' ) {
                $err['ten_loai'] = "bạn chưa nhập tên";
            }
            if ($ten_loai = 'ten_loai' ) {
                $err['ten_loai'] = "bạn nhập tên chùng";
            }
            if (!$err) {
                $m_loai = new m_loai();
                $result = $m_loai->add_loai($id_loai, $ten_loai);
                $msg = "thêm sp thành công ";
                header("location:showloai.php?msg=$msg ");
                exit;
            }
        }
        $view = "views/show_loai/v_add_loai.php";
        include("templates/layout.php");
    }
    public function edit_loaih()
    {
        $id_loai =$_GET['id_loai'];
        $m_loai = new m_loai();
        $result_id_loai = $m_loai->read_id_loai($id_loai);
        $err = [];
        if (isset($_POST['btnluu'])) {
            $id_loai = $_POST['id_loai'];
            $ten_loai = $_POST['ten_loai'];
            $m_loai = new m_loai();
            $result = $m_loai->edit_loai( $id_loai, $ten_loai);
            if ($ten_loai == '') {
                $err['ten_loai'] = "bạn chưa nhập tên";
            }
            if (!$err) {
                $msg = "thêm sp thành công ";
                header("location:showloai.php?msg=$msg ");
                exit;
            }
        }
        $view = "views/show_loai/v_edit_loai.php";
        include("templates/layout.php");
    }
    public function xoa_loai()
    {
        $id_loai = $_GET['id_loai'];
        $m_loai = new m_loai();
        $xoa_loais = $m_loai->xoa_loai();
        $msg = "thêm sp thành công ";
        header("location:showloai.php?msg=$msg ");
        exit;
    }
}

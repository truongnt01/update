<?php 
class c_san_pham_ct{
    public function index(){
        include ("models/m_san_pham_ct.php");
        $m_san_pham_ct = new m_san_pham_ct();
        $san_pham_cts = $m_san_pham_ct->doc_san_pham_ct();
        $add_sp_cung_loai = $m_san_pham_ct->load_sp_cung_loai();
        include ("models/m_binh_luan.php");
        $m_binh_luan = new m_binh_luan();
        $binh_luans = $m_binh_luan->doc_binh_luan();
        // include ("models/m_count_bl.php");
        // $m_count_bl = new m_count_bl();
        // $count_bls = $m_count_bl->doc_count_bl();
        // mảng dữ liệu hàng hóa 
        // goij ddgd views vaof đây 
        $view = "views/san_pham_ct/v_san_pham_ct.php";
        include ("templates/layout.php");
    }
    public function add_binh_luan()
    {
        // include ("models/m_binh_luan.php");
        if (isset($_POST['cmt'])) {
            $id_kh = $_POST['id_kh'];
            $id_hh = $_POST['id_hh'];
            $noi_dung = $_POST['noi_dung'];

            $m_add_bl = new m_binh_luan();
            $m_add_bl->insert_binh_luan($id_kh, $id_hh, $noi_dung);
        }
    }

} 
 

?>
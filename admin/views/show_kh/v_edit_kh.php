<form action="" method="post" enctype="multipart/form-data">
    <div class="addbang">
       
            <input type="hidden" name="id_kh" placeholder="Auto number" value="<?= $result_id_kh->id_kh ?>">

        
        <div class="box"> <label for="">Tên khách hàng</label> <br>
            <input type="text" name="ho_ten" value="<?= $result_id_kh->ho_ten ?>">
            <?php if (isset($err['ho_ten'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['ho_ten'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box"> <label for="">Tên đăng nhập</label> <br>
            <input type="text" name="ten_dang_nhap" value="<?= $result_id_kh->ten_dang_nhap ?>">
            <?php if (isset($err['ten_dang_nhap'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['ten_dang_nhap'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box"> <label for="">Vai Trò </label> <input type="text" name="vai_tro" value="<?= $result_id_kh->vai_tro ?>">
            <?php if (isset($err['vai_tro'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['vai_tro'] ?> </div>
            <?php endif  ?>
        </div>
    </div>
    <div class="addbang">
        <div class="box">

            <label for="">Mật khẩu </label> <br> <input type="text" name="mat_khau" value="<?= $result_id_kh->mat_khau ?>">
            <?php if (isset($err['mat_khau'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['mat_khau'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box">
        <label for="">email </label> <br> <input type="email" name="email" value="<?= $result_id_kh->email ?>">
        <?php if (isset($err['email'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['email'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box"> <label for="">kích hoạt </label> <br> <input type="text" name="kich_hoat" value="<?= $result_id_kh->kich_hoat ?>">
            <?php if (isset($err['kich_hoat'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['kich_hoat'] ?> </div>
            <?php endif  ?>
        </div>

    </div>
 
    <button type="submit" name="btnluu">sửa user </button>
</form>
<a href="showkh.php"> <button type="submit"> danh sách sp </button> </a>
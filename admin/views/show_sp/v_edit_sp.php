<form action="" method="post" enctype="multipart/form-data">
    <div class="addbang">
 
            <input type="hidden" name="id_hh" placeholder="Auto number" value="<?= $result_id_hh->id_hh ?>">

   
        <div class="box"> <label for="">Tên hàng hóa </label> <br>
            <input type="text" name="ten_hh" value="<?= $result_id_hh->ten_hh ?>">
            <?php if (isset($err['ten_hh'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['ten_hh'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box"> <label for="">Đơn giá </label> <br>
            <input type="text" name="don_gia" value="<?= $result_id_hh->don_gia ?>">
            <?php if (isset($err['don_gia'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['don_gia'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box">

<label for="">Giảm giá</label> <br> <input type="text" name="giam_gia" value="<?= $result_id_hh->giam_gia ?>">

</div>
    </div>
    <div class="addbang">
    <div class="box"> <label for="">Id loại</label> <input type="text" name="id_loai" value="<?= $result_id_hh->id_loai ?>">
            <?php if (isset($err['id_loai'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['id_loai'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box">

            <label for="">Ảnh hàng hóa</label>
            <input type="hidden" name="hinh" value="<?= $result_id_hh->hinh ?>">
            <br> <input type="file" name="hinh" style="border:1px solid #000 ;">
            <?php if (isset($err['hinh'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['hinh'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box"> <label for="">Ngay nhập</label> <br> <input type="date" name="ngay_nhap" value="<?= $result_id_hh->ngay_nhap ?>">
            <?php if (isset($err['ngay_nhap'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['ngay_nhap'] ?> </div>
            <?php endif  ?>
        </div>

    </div>
    <div class="addbang">
      
        <div class="box"> <label for="">Đặc biệt</label> <input type="text" name="dac_biet" value="<?= $result_id_hh->dac_biet ?>">
        <?php if (isset($err['dac_biet'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['dac_biet'] ?>  </div>
                <?php endif  ?>
        </div>
        <div class="box"> <label for="">da_ban</label> <input type="text" name="da_ban" value="<?= $result_id_hh->da_ban ?>">
            <?php if (isset($err['da_ban'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['da_ban'] ?> </div>
            <?php endif  ?>
        </div>
     
    
        </div>

    <div class="box" style="margin-top: 20px;"> <label for="">Mô tả hàng hóa</label> <br>
        <textarea name="mo_ta" cols="100" rows="10" style="margin-left:50px; margin-top: 10px;padding: 10px;">
        <?= $result_id_hh->mo_ta  ?>
     </textarea>
    </div>

    <button type="submit" name="btnluu">sửa sp </button>
</form>
<a href="showsp.php"> <button type="submit"> danh sách sp </button> </a>
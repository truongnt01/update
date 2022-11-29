<form action="" method="post">
  
<div class="addbang">
            <input type="hidden" name="id_loai" placeholder="Auto number" value="<?= $result_id_loai -> id_loai ?>"   >
            <?php if (isset($errr['id_loai'])) : ?>
                <div><?= $errr['id_loai'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box"> <label for="">Tên loại hàng </label> <br>
            <input type="text" name="ten_loai"   value="<?= $result_id_loai->ten_loai ?>">
            <?php if (isset($errr['ten_loai'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $errr['ten_loai'] ?> </div>
            <?php endif  ?>
        </div>
       
        <button type="submit" name="btnluu">sửa</button>
</form>
<a href="showloai.php"> <button type="submit"> danh sách sp </button> </a>
 

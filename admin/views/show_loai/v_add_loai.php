<form action="" method="post">
    <div class="addbang">
       
        <div class="box"> <label for="">Tên loại hàng </label> <br>
            <input type="text" name="ten_loai">
            <?php if (isset($err['ten_loai'])) : ?>
                <div style="color:red;padding-left: 50px;font-weight: 600;"><?= $err['ten_loai'] ?> </div>
            <?php endif  ?>
        </div>
        <button type="submit" name="btnluu">Thêm mới </button> 
</form>
 
<a href="showloai.php"> <button type="submit">danh loại hàng</button></a>
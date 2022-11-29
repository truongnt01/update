<form action="" method="post">
  
<div class="addbang">
            <input type="hidden" name="id_bl" placeholder="Auto number" value="<?= $result_id_bl -> id_bl ?>"   >
            <?php if (isset($errr['id_bl'])) : ?>
                <div><?= $errr['id_bl'] ?> </div>
            <?php endif  ?>
        </div>
        <div class="box" style="margin-top: 20px;"> <label for="">Nội dung bình luận</label> <br>
        <textarea name="noi_dung" cols="100" rows="5" style="margin-left:20px; margin-top: 10px;padding: 10px;">
        <?= $result_id_bl->noi_dung ?>
     </textarea>
    </div>
        <button type="submit" name="btnluu">sửa</button>
</form>
<a href="showbl.php"> <button type="submit"> danh sách sp </button> </a>
 

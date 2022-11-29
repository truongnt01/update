<main>
 
<div class="noidung">
            <table border="1">
                <tr>
                  
                    <th>id loại</th>
                    <th>Tên Loại hàng</th>
                    <th>Chỉnh sửa</th>
                </tr>
                <?php foreach($m_loais as $key=>$value){ ?>
                <tr>
                   
                    <td><?php echo $value->id_loai ?></td>
                    <td><?php echo $value->ten_loai ?></td>
                    <td>
                        <a class="sx" href="editloai.php?id_loai=<?php echo $value->id_loai ?>">Sửa</a>
                        <a class="sx" onclick=" return confirm('Bạn có muốn xóa ko<?= $value->ten_loai?>')" href="xoaloai.php?id_loai=<?php echo $value->id_loai ?>">xóa</a>
                    </td>
                </tr>
                <?php }?>
            </table>
            <a href="addloai.php"> <button type="submit">Thêm loại hàng </button></a>
        </div>
</main>

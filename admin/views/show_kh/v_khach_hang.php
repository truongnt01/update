<main>
<div class="noidung">
            <table border="1">
                <tr>
                     
                    <th>id khách hàng</th>
                 
                    <th>Họ tên</th>
                    <th>Tên đăng nhập </th>
                    <th>Mật Khẩu </th>
                    <th>Email</th>
                    <th>Ảnh</th>
                    <th>Kích hoạt</th>
                    <th>Vai Trò </th>
                    <th>Chỉnh sửa</th>
                </tr>
                <?php foreach($m_khach_hangs as $key=>$value){ ?>
                <tr>
                    
                    <td><?php echo $value->id_kh ?></td>
                    <td><?php echo $value->ho_ten ?></td>
                    <td><?php echo $value->ten_dang_nhap ?></td>
                    <td><?php echo $value->mat_khau ?></td>
                    <td><?php echo $value->email ?></td>
                    <td><img src="../../../daall/public/images/<?php echo $value->hinh ?>" alt="" width="50px"></td>
                    <td><?php echo $value->kich_hoat ?></td>
                    <td><?php echo $value->vai_tro ?></td>
                   
                    <td>
                        <a class="sx" href=" edit_kh.php?id_kh=<?php echo $value->id_kh ?>">Sửa</a>
                        <a class="sx" onclick="return confirm('Bạn có muốn xóa ko')" href="xoakh.php?id_kh=<?php echo $value->id_kh ?>">xóa</a>
                    </td>
                </tr>
                <?php }?>
            </table>
    
        </div>
</main>
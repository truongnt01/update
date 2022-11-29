<nav>
        <img src="public/images/mau-banner-quang-cao-khuyen-mai.jpg" alt="" class="banner">
    </nav>
    <main>
        <div class="danhmuc">
            <h3 class="danhmuc1"> <i class="fa-solid fa-list"></i> Tất cả danh mục</h3>
            <div class="spto">Máy tính & Laptop</div>
            <?php foreach  ($loais as $key=> $value){ ?>
            <div class="spcon">
            <a href="hhdanhmuc.php?id_loai=<?php echo $value ->id_loai; ?>&ten_loai=<?php echo $value->ten_loai?>"><i class="fa-solid fa-caret-right"></i>
                <?php echo $value->ten_loai;?> </a>
               
            </div>
            <?php } ?>
        </div>
        <div class="conntenr">
            <div class="sapxep">
                <span class="sapxep1">Sắp xếp theo</span>
                <div class="sapxepcon" style="background: #ee4d2d; color: #fff;">Phổ biến</div>
                <div class="sapxepcon">Mới nhất </div>
                <div class="sapxepcon">Bán chạy</div>
            </div>
            <div class="sanpham">
            <?php foreach( $san_phams as $key=>$value ) {?>
        
        <a href="sanphamct.php?id_hh=<?php echo $value->id_hh; ?>&id_loai=<?php echo $value->id_loai?>">  <div class="sanphamct">
              <img src="public/images/<?php echo $value->hinh;?>" alt="" class="anhsanpham">
              <div class="tensp"><a href="sanphamct.php?id_hh=<?php echo $value->id_hh; ?>&id_loai=<?php echo $value->id_loai?>"><?php echo $value->ten_hh;?></a></div>
              <div class="giatien">₫<?php echo number_format($value->don_gia)?></div>
              <div class="luotxem"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> Đã bán <?php echo $value->da_ban;?>k</div>
              <div class="chitietsp"><a href="sanphamct.php?id_hh=<?php echo $value->id_hh; ?>&id_loai=<?php echo $value->id_loai?>">Xem chi tiết</a></div>
          </div></a>        
      <?php }?>
                
            </div>
            <div class="chuyentrang">
                <button class="back">&#60;</button>
                <button class="next" style="background: #ee4d2d; color: #fff;">1</button>
                <button class="next">2</button>
                <button class="next">3</button>
                <button class="next">4</button>
                <button class="next">5</button>
                <button class="back">&#62;</button>

            </div>
        </div>
    </main>
    
<?php
session_start();
ob_start();
if (!isset($_SESSION['test'])){
    $_SESSION['test'] = 1;
}
$_SESSION['test'] += 1;

echo $_SESSION['test'];
if (isset($_SESSION['users'])) {
    $data_user = json_decode(json_encode($_SESSION['users']), true);
}
?>
<header>
    <div class="top">
        <div class="logo"><img src="public/images/logo.png" alt="" class="logo1"></div>
       
        <div class="timkiem">
            <form action="../../daall/search.php" method="get">
                <input type="search" placeholder="Tìm kiếm ......." class="search" required name="data" >
                <button class="nuttk" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
        <div class="login">
            <div class="giohang"><i class="fa-solid fa-cart-shopping"></i><a href="../../daall/cart.php"> Giỏ hàng</a></div>

            <?php
            if (isset($_SESSION['users'])) {
            ?>

                <div class="dangki1">
                    <i class="fa-solid fa-user"></i> <a href="#"><?= $data_user[0]['ho_ten'] ?></a>
                </div>
                <div class="dangki1">
                    <i class="fa-solid fa-right-from-bracket" style="transform: rotate(-180deg);"></i> <a onclick="return confirm('Bạn có muốn đăng xuất ko?')" href="../../daall/admin/logout.php?func=exit">Log-out</a>
                </div>

            <?php
            } else {
            ?>
                <div class="dangki1">
                    <i class="fa-solid fa-lock"></i> <a href="../../daall/admin/login.php"> Đăng Nhập</a>
                </div>
                <div class="dangki1">
                    <i class="fa-solid fa-pen-to-square"></i><a href="../../daall/admin/register.php"> Đăng Kí</a>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li><a href="allsanpham.php">Sản phẩm</a></li>
            <li><a href="allsanpham.php">Tin tức</a></li>
            <li><a href="allsanpham.php">Giới thiệu </a></li>
            <li><a href="allsanpham.php"> Liên hệ</a></li>
        </ul>
    </div>
</header>
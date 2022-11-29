<?php
  if (isset($_SESSION['users'])) {
  $data_user = json_decode(json_encode($_SESSION['users']),true);
  if($data_user[0]['vai_tro'] == '0'){
    header('location:../../../daall/index.php');
    exit;
  }
}
?>
<div class="sidebar">
    <div class="sidebar-brand">
      <h2>Admin Page</h2>
    </div>
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="showsp.php"   ><i class="fa-brands fa-codepen"></i>Sản Phẩm </a>
        </li>
        <li>
          <a href="showloai.php" class="tagA"><i class="fa-solid fa-sitemap"></i>Loại</a>
        </li>
        <li>
          <a href="showbl.php" class="tagA"><i class="fa-solid fa-clipboard"></i>Bình Luận</a>
        </li>

        <li>
          <a href="showkh.php" class="tagA"><i class="fa-solid fa-users"></i>Khách Hàng</a>
        </li>
        <li>
          <a href="../../../daall/index.php" class="tagA"><i class="fa-solid fa-house"></i>Vào Website</a>
        </li>
     
      </ul>
    </div>
  </div>
  <div class="main-content">
    <?php if(isset($_SESSION['users'])) :?>
    <header>
      <h2>
        <label for="">
          <i class="fa-solid fa-bars"></i>
        </label>
        Dashboad
      </h2>
      <div class="search-wrapper">
        <i class="fa-solid fa-magnifying-glass"></i>
        <input type="search" placeholder="Search here..">
      </div>

      
      <div class="user-wrapper">
        <img src="../public/images/<?= $data_user[0]['hinh']?>" alt="" width="50" height="50">
        <div>
          <h4><?= $data_user[0]['ho_ten']?></h4>
          <small><?= $data_user[0]['email']?></small>
        </div>
        <div class="log-out-btn" >
          <a onclick="return confirm('Bạn có muốn đăng xuất ko?')" href="logout.php?func=exit">Logout</a>
        </div>
      </div>
      
    </header>
    <?php endif ?>
    
    <!-- <script>
      const aTag = document.querySelectorAll('.tagA');
      console.log(aTag);
      for(let i = 0; i < aTag.length; i++){
        aTag[i].addEventListener('click', function(){
          let current = document.getElementsByClassName('active');
          current[0].className = current[0].className.replace(" active", " ");
          this.className += " active";
        });
      }
      // console.log(item[0]);
    </script> -->
    <!-- <script>
      const menuIcon = document.querySelector('.fa-bars');
      const menuBar = document.querySelector('.sidebar');
      console.log(menuBar);
      menuIcon.addEventListener('click', ()=> {
        menuBar.classList.toggle('');
      })
    </script> -->

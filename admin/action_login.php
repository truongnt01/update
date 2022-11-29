<?php
// if (isset($_POST['login'])) {
//   echo $_POST['user_name'];
// }

include("controllers/c_user.php");
$c_user = new c_user();
$c_user->checkLogin();
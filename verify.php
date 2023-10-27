<?php
// $_POST 變數本身是陣列
// print_r($_POST);

if ($_POST['acc'] == 'admin' && $_POST['pw']  == '1234') {
  header('location:member.php?log=1');
} else {
  header('location:login.php?m=帳號或密碼錯誤，請重新登入');
}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員中心</title>
</head>

<body>
  <?php

  if (isset($_COOKIE['login']) && !empty([$_COOKIE['login']])) {
    echo "<h3>登入成功</h3>";

    echo "<a href='login.php'>回登入頁</a>";
    echo "<a href=logout.php>登出</a>";
  } else {
    setcookie('error', '沒有登入驗證，非法登入', time());
    header("location:login.php");
  }

  ?>
</body>

</html>
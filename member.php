<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員中心</title>
</head>

<body>
  <?php
  // 告訴伺服器要使用 session 了
  session_start();

  if (isset($_SESSION['login']) && !empty([$_SESSION['login']])) {
    echo "<h3>登入成功</h3>";

    echo "<a href='login.php'>回登入頁</a>";
  } else {
    header("location:login.php");
    // echo "非法登入";
  }

  ?>
</body>

</html>
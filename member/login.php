<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <style>
  .login-block {
    padding: 30px 40px;
    border: 1px solid black;
    box-shadow: 4px 4px 10px black;
    margin: 10px auto;
    width: 280px;
  }

  .login-input {
    margin: 10px;
  }

  input[type='text'] {
    border: 1px solid blue;
  }

  .login-input input {
    font-size: 20px;
    padding: 5px;
  }

  .btn {
    text-align: center;
    margin-top: 15px;
  }

  .btn input[type='reset'],
  .btn input[type='submit'] {
    padding: 5px 10px;
    border: 1px solid green;
    border-radius: 5px;
    margin: 5px;
  }
  </style>
</head>

<body>
  <?php
  session_start();
  if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
    include_once "header.php";
  }
  ?>
  <div class="login-block">
    <?php


    if (isset($_SESSION['error'])) {
      echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
      unset($_SESSION['error']);
    }
    if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
      echo $_SESSION['login'] . "歡迎你";
      echo "<a href=logout.php>登出</a>";
    } else {
    ?>
    <form action="verify.php" method='post'>
      <div class='login-input'>
        <label for="acc">帳號：</label>
        <input type="text" name="acc" id="acc">
      </div>
      <div class='login-input'>
        <label for="pw">密碼：</label>
        <input type="password" name="pw" id="pw"></input>
      </div>
      <div class='btn'>

        <input type="submit" value="登入">
        <input type="reset" value="重置">
      </div>

    </form>
    <?php
    }
    ?>
  </div>
</body>

</html>
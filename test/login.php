<?php

session_start();

if(isset($_SESSION['username'])) {
  header('Location: index.php');
  exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  // 在此处使用数据库连接代码验证用户名和密码是否正确
  if(验证通过) {
    $_SESSION['username'] = $_POST['username'];
    header('Location: index.php');
    exit();
  } else {
    $error_message = '用户名或密码错误';
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>登录 - 电影院员工管理系统</title>
</head>
<body>
  <h1>登录</h1>
  <?php if(isset($error_message)) { ?>
    <p><?php echo $error_message; ?></p>
  <?php } ?>
  <form method="post">
    <label>用户名：</label>
    <input type="text" name="username" required><br>
    <label>密码：</label>
    <input type="password" name="password" required><br>
    <button type="submit">登录</button>
  </form>
</body>
</html>

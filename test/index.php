<?php

session_start();

if(!isset($_SESSION['username'])) {
  header('Location: login.php');
  exit();
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>电影院员工管理系统</title>
</head>
<body>
  <h1>欢迎，<?php echo $_SESSION['username']; ?></h1>
  <a href="logout.php">退出</a>
  <h2>员工列表</h2>
  <table>
    <thead>
      <tr>
        <th>员工ID</th>
        <th>姓名</th>
        <th>职位</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // 在此处使用数据库连接代码查询员工列表，并将结果循环显示在表格中
      ?>
    </tbody>
  </table>
</body>
</html>

<?php
require 'db_connect.php';
$name = $_COOKIE['username'];
$sql="insert into info(name) values ('$name');";//添加账户sql语句
mysqli_query($con, $sql);
echo "<script> window.location.href = 'index.html' </script>";
?>

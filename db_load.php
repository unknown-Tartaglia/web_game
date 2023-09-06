<?php
require 'db_connect.php';
$user = $_COOKIE['username'];
$sql="insert into info(name) values ('$user');";//添加账户sql语句
mysqli_query($con, $sql);
for($i = 0; $i <= 7; $i += 1)
{
    if(isset($_COOKIE['level0' . $i]))
    {
        $sql="update info set level0$i = '通过' where name='$user';";//添加账户sql语句
        mysqli_query($con, $sql);
    }
}
setcookie("loaded", 'true');
echo "<script> window.location.href = 'index.html' </script>";
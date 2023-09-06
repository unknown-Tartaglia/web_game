<?php
    $flag = -1;
    $user = $_COOKIE['username'];
    $arr = ["送分题", "开发者模式", "隐藏的flag", "调用flag函数", "设法提交令牌",
            "修改HTML", "验证码", "速填验证码"];
    
    for($i = 0; $i <= 7; $i += 1)
    {
        if(isset($_GET['flag0' . $i]))
        {
            $flag = $i;
            break;
        }
    }

    $submit = $_GET['flag0' . $flag];
    if($submit === $arr[$flag])
    {
        require 'db_connect.php';
        $sql="update info set level0$flag = '通过' where name='$user';";//添加账户sql语句
        mysqli_query($con, $sql);

        setcookie('level0' . $flag, "true", time() + 30 * 24 * 60 * 60);
        echo "<script> alert('成功') </script>";
        echo "<script> window.location.href = 'index.html' </script>";
    }
    else
    {
        echo "<script> alert('失败') </script>";
        echo "<script> window.location.href = 'level0" . $flag . ".html' </script>";
    }
?>
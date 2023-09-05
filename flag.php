<?php
    $flag = -1;
    $arr = ["送分题", "开发者模式", "隐藏的flag", "调用flag函数", "设法提交令牌",
            "修改HTML", "验证码"];
    
    for($i = 0; $i <= 6; $i += 1)
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
        setcookie('level0' . $flag, "true");
        echo "<script> alert('成功') </script>";
        echo "<script> window.location.href = 'index.html' </script>";
    }
    else
    {
        echo "<script> alert('失败') </script>";
        echo "<script> window.location.href = 'level0" . $flag . ".html' </script>";
    }
?>
<?php
    session_start();
    $code = $_SESSION['captcha'];
    $submit = $_POST['msg'];
    if($submit == $code)
        echo "<script> alert('flag is {验证码}') </script>";
    else
        echo "<script> alert('验证码错误') </script>";
    echo "<script> window.location.href = 'level06.html' </script>";
?>
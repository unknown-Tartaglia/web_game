<?php
    require 'level05.html';
    $submit = $_POST['msg'];
    if($submit == "helloworld")
        echo "<script> alert('flag is {修改HTML}') </script>";
    else
        echo "<script> alert('请提交helloworld以获取flag') </script>";
?>
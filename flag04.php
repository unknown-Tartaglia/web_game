<?php
    require 'level04.html';
    $submit = $_GET['msg'];
    if($submit == "helloworld")
        echo "<script> alert('flag is {设法提交令牌}') </script>";
    else
        echo "<script> alert('请提交helloworld以获取flag') </script>";
?>
<?php
    if(isset($_GET['flag00']))
    {
        $submit = $_GET['flag00'];
        if($submit == "送分题")
        {
            setcookie("level00", "true");
            require 'index.html';
            echo "<script> alert('成功') </script>";
        }
        else
        {
            require 'level00.html';
            echo "<script> alert('失败') </script>";
        }
    }
    else if(isset($_GET['flag01']))
    {
        $submit = $_GET['flag01'];
        if($submit == "开发者模式")
        {
            setcookie("level01", "true");
            require 'index.html';
            echo "<script> alert('成功') </script>";
        }
        else
        {
            require 'level01.html';
            echo "<script> alert('失败') </script>";
        }
    }
    else if(isset($_GET['flag02']))
    {
        $submit = $_GET['flag02'];
        if($submit == "隐藏的flag")
        {
            setcookie("level02", "true");
            require 'index.html';
            echo "<script> alert('成功') </script>";
        }
        else
        {
            require 'level02.html';
            echo "<script> alert('失败') </script>";
        }
    }
    else if(isset($_GET['flag03']))
    {
        $submit = $_GET['flag03'];
        if($submit == "调用flag函数")
        {
            setcookie("level03", "true");
            require 'index.html';
            echo "<script> alert('成功') </script>";
        }
        else
        {
            require 'level03.html';
            echo "<script> alert('失败') </script>";
        }
    }
    else if(isset($_GET['flag04']))
    {
        $submit = $_GET['flag04'];
        if($submit == "设法提交令牌")
        {
            setcookie("level04", "true");
            require 'index.html';
            echo "<script> alert('成功') </script>";
        }
        else
        {
            require 'level04.html';
            echo "<script> alert('失败') </script>";
        }
    }
    else if(isset($_GET['flag05']))
    {
        $submit = $_GET['flag05'];
        if($submit == "修改HTML")
        {
            setcookie("level05", "true");
            require 'index.html';
            echo "<script> alert('成功') </script>";
        }
        else
        {
            require 'level05.html';
            echo "<script> alert('失败') </script>";
        }
    }
?>
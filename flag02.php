<?php
	require 'level02.html';
	if(isset($_COOKIE['flag02'])){
		echo "<script> alert('flag is {隐藏的flag}') </script>";
	}
	else {
		echo "<script> alert('不要耍小聪明哦') </script>";
	}
?>

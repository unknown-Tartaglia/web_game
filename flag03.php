<?php
	if(isset($_COOKIE['flag03']))
		echo "<script> alert('flag is {调用flag函数}') </script>";
	else
		echo "<script> alert('不要耍小聪明哦') </script>";
	echo "<script> window.location.href = 'level03.html' </script>";
?>

<?php

	session_start();
	if(!isset($_SESSION['un'])) {
		
			header("location:Index.php");
	}
	
	else
	{
		echo "Hello".$SESSION['un'];
		echo "<br/> <a href= 'logout.php'>Logout<a/>";
	}
	
?>
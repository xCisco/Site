<?php
	session_unset($_SESSION['user_reg1']);
	session_destroy($_SESSION['user_reg1']);
	
	header("Location:home.php");






?>
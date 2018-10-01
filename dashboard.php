<?php


//-----------------------------------CONEXIUNE BAZA DE DATE--------------------------
	$host = "localhost";
	$username = "root";
	$db = "nokia";
	
	$connection = mysql_connect($host,$username,"",$db);
//-----------------------------------------------------------------------------------

error_reporting(0);
	session_start();


	$admin = "select * from nokia.conturi c where c.cod = 'administrator' ";
		$result1 = mysql_query($admin);
		
			while($row1 = mysql_fetch_assoc($result1)){
				
				$temp = $row1['cod'];
				
				
				
				
			}
			
	if($_SESSION['code'] != $temp){
		
		header('Location:situatie.php');
		
	}		






?>



<html>
<head><link rel="stylesheet" type="text/css" href="style/dash.css"></head>
<body style="background-color:#efeff5";>






<a href="insert.php"><button type=submit>Inserare date elevi</button></a><br/><br/>
<a href="materii.php"><button type=submit>Inserare materii</button></a><br/><br/>
<a href="note.php"><button type=submit>Inserare note</button></a><br/><br/>
<!--

<a onclick="window.open('materii.php', '_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes');">
  <button type=submit>Legenda Materii</button><br/><br/>
</a>
-->

<a href="logout.php"><button value="submit" >Logout</button></a>









</body>
</html>
<?php



//------------------------CONEXIUNE BAZA DE DATE--------------------//  
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "nokia";
   $connect = mysql_connect($host,$user,$pass,$db);

//------------------------------------------------------------------//  

error_reporting(0);


	if(isset($_POST['submit'])){
		
		$user = $_POST['user'];
		$cod = $_POST['cod'];
		$pass = $_POST['password'];
		
		
		
		$sql = "SELECT username,cod from nokia.conturi where username = '".$user."' and cod = '".$cod."'";
		$req = mysql_query($sql);
		$count = mysql_num_rows($req);
		
		
		if($count == 1){
			
			$reset = "UPDATE nokia.conturi c SET pass ='".$pass."' where c.username = '".$user."' or c.cod = '".$cod."'";
			$req1 = mysql_query($reset);
			
			echo "<font color='green'>Ti-ai resetat parola cu succes</font> Inapoi la <a href='login.php'>Login</a>";
			
			
			
		}
		
		
		
	}


















?>






<html>
<head><link rel="stylesheet" type="text/css" href="style/passreset.css"></head>

<body style="background-color:#efeff5";>

<form method=post>
	<label><h3><p style=text-align:center><b>Introdu userul:</b></p></h3></label>
	<input type=text name="user"><br/><br/>
	<label><h3><p style=text-align:center><b>Introdu codul de student:</b></p></h3></label>
	<input type=text name="cod"><br/><br/>
	
	<label><h3><p style=text-align:center><b>Introdu parola noua:</b></p></h3></label>
	<input type=password name="password"><br/><br/>
	
	<button type=submit name=submit>Reseteaza</button>
	




</form>






</body>
</html>
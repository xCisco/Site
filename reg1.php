<?php

//------------------------CONEXIUNE BAZA DE DATE--------------------//  
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "nokia";
   $connect = mysql_connect($host,$user,$pass,$db);

//------------------------------------------------------------------//  

error_reporting(0);

 if($_SERVER["REQUEST_METHOD"] == "POST") {
      
	  

      $nume = mysql_real_escape_string($_POST['nume']);
      $prenume = mysql_real_escape_string($_POST['prenume']);
      $facultate = mysql_real_escape_string($_POST['facultate']);
      $specializare = mysql_real_escape_string($_POST['specializare']);
      $matricol = mysql_real_escape_string($_POST['matricol']);

		$cookie_name = "matricol";
	  $cookie_value = $matricol;
	  setcookie($cookie_name,$cookie_value);
	  
	  
      $sql = "SELECT * FROM nokia.general WHERE nume LIKE '%$nume%' and prenume LIKE '%$prenume%'  and facultate = '$facultate' and specializare = '$specializare' and nr_mat = '$matricol'";
      $result = mysql_query($sql);
      $count = mysql_num_rows($result);

      
		  
			 if($count == 1) { 
				$_SESSION['user_reg'] = $result['id'];
				header("Location: reg2.php");
			}else {
				echo "<font color='red'>Nu ai fost gasit in baza de date!</font>";
			}
			
		
      
      }



















?>


<html>
<body style="background-color:#efeff5";>
<head>
<link rel="stylesheet" type="text/css" href="style/reg1.css">

</head>


<form method=post>

<h2><p style=text-align:center>Formular de inregistrare </p></h2>

	 <label><h4><p style=text-align:center><b>Nume</b></p></h4></label>
	<input type=text name="nume"><br/><br/>
	<label><h4><p style=text-align:center><b>Prenume</b></p></h4></label>
	<input type=text name="prenume"><br/><br/>
	<label><h4><p style=text-align:center><b>Facultate</b></p></h4></label>
	<input type=text name="facultate"><br/><br/>
	<label><h4><p style=text-align:center><b>Specializare</b></p></h4></label>
	<input type=text name="specializare"><br/><br/>
	<label><h4><p style=text-align:center><b>Numar matricol</b></p></h4></label>
	<input type=text name="matricol"><br/><br/>
	
	<button type=submit name="submit">Urmator</button>
	





</form>


</body>
</html>
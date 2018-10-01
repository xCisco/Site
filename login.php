<?php


   session_start();
//------------------------CONEXIUNE BAZA DE DATE--------------------//  
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "nokia";
   $connect = mysql_connect($host,$user,$pass,$db);

//------------------------------------------------------------------//  
error_reporting(0);
   
   

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysql_real_escape_string($_POST['username']);
      $mypassword = mysql_real_escape_string($_POST['password']);

      $sql = "SELECT * FROM nokia.conturi WHERE username = '$myusername' and pass = '$mypassword' ";
      $result = mysql_query($sql);
      $count = mysql_num_rows($result);
	  $temp = "";
	  
	  while ($row = mysql_fetch_array($result)) {
							
						
							$_SESSION['code'] = $row['cod'];
					}
	 
	  
	  $admin = "select * from nokia.conturi c where c.cod = 'administrator' ";
		$result1 = mysql_query($admin);
		
			while($row1 = mysql_fetch_assoc($result1)){
				
				$temp = $row1['cod'];
				
				
				
				
			}
		
		
		
		if($temp == $_SESSION['code']){
		  
			 if($count==1 ) { 
				$_SESSION['CurrentUser'] = $result['cod'];
				header("Location: dashboard.php");
			}else {
				$error = "Your Login Name or Password is invalid";
				echo "<font color='red'>Your Login Name or Password is invalid</font>";
			}
			
		}else{
     
      
				
				if($count == 1 && $temp != $_SESSION['code']) { 
					$_SESSION['CurrentUser'] = $result['nr_mat'];
					
				
					while ($row = mysql_fetch_array($result)) {
							
						
							$_SESSION['code'] = $row['cod'];
					}
	  
				
				
				header("Location: situatie.php");
			}else {
				$error = "Your Login Name or Password is invalid";
				echo "<font color='red'>Your Login Name or Password is invalid</font>";
			}
		}
   
		

	
   }
   
   
?>

<html>


<head><link rel="stylesheet" type="text/css" href="style/login.css"></head>

<body style="background-color:#efeff5";>




<form method=post>
<label><h3><p style=text-align:center><b>Special account:</b></p></h3></label>
	<input type=text name=account><br/><br/>
	<label><h3><p style=text-align:center><b>Username:</b></p></h3></label>
	<input type=text name="username"><br/><br/>
	<label><h3><p style=text-align:center><b>Password:</b></p></h3></label>
	<input type=password name="password"><br/>

	<button type=submit name="submit">Login</button>



</form>



<p style=font-weight:bold;>Nu ai un cont?<a href="reg1.php">Inregistreaza-te acum!</a></p></br></br>

<p style=font-weight:bold;>Ti-ai uitat parola? <a href="passreset.php">Click aici!</a></p>



</body>
</html>




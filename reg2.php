<html>

    <style type="text/css">
    txt {
        margin: 100px;
		padding: 25px 25px;
		font-size: 30px;
		
		
		
    }
    </style>

</html>




<?php

 

//------------------------CONEXIUNE BAZA DE DATE--------------------//  
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "nokia";
   $connect = mysql_connect($host,$user,$pass,$db);

//------------------------------------------------------------------//  

error_reporting(0);


//-----------------------Afisare cod register pe pag 2---------------//

	
		
	$matricol = $_COOKIE['matricol'];
		
	$cod = "select distinct cod from nokia.general where nr_mat = '$matricol'";
	$result = mysql_query($cod);

	while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
		$temp = $row['cod'];
	echo "<txt class='cod'>Codul tau de inregistrare este: ".$row['cod']."</txt><br/><br/>";
}
	
//--------------------------------------------------------------------//


//---------------------------Functie REGISTER------------------------//
	
	if(isset($_POST['submit'])){
		
			$matricol = $_COOKIE['matricol'];
	$cod = "select cod from nokia.general where nr_mat = '$matricol'";
	$result = mysql_query($cod);
	
	

			
		$user = $_POST['user'];		
		$password = $_POST['password'];		
		$cod1 = $_POST['cod'];

		
		$chk1 = "select username from nokia.conturi where username = '$user'";
			$sql1 = mysql_query($chk1);
				$count1 = mysql_num_rows($sql1);
				
		$chk2 = "select cod from nokia.conturi c where cod = '$cod1'";
			$sql3 = mysql_query($chk2);
				$count2 = mysql_num_rows($sql3);
				
			
		
		if($user == NULL or $password == NULL or $cod1 == NULL){
			echo "<font color='red'>Nu ai completat campurile necesare</font></br></br>";
		}else{	
			if($count1==1){
					echo "<font color='red'>Utilizatorul exista deja in baza de date!</font> </br></br>";
			}else{
				
				
							
					
						
						
					
						
						
				
					if($count2==1 && $cod1 != 'administrator'){
							echo "<font color='red'>Codul a fost folosit deja!</font> </br></br>";
							}else{
								
								
						
							if($temp == 'administrator' && strlen($password) >= 8 && $cod1 == $temp){
						
						
					
				
						$sql2 = "INSERT INTO nokia.conturi(username,pass,cod) VALUES ('$user', '$password', '$cod1')";
						
						$sql4 = mysql_query($sql2);
						
						echo "<font color='green'>Inserarea a avut succes</font>";
						
					}else{
				
				
				
				
				if(strlen($password) < 8){
					echo "<font color='red'>Parola trebuie sa contina minim 8 caractere!</font></br></br>";
				}else{
					if($cod1 == $temp){
						
						
						$sql2 = "INSERT INTO nokia.conturi(username,pass,cod) VALUES ('$user', '$password', '$cod1')";
						
						$sql4 = mysql_query($sql2);
						
						
						echo "<font color='green'>Inserarea a avut succes</font>";
						
						
						
					}else{
						
						
						echo "<font color='red'>Codul introdus este gresit!</font></br></br>";

	
	
	
	
	
	
	
	
	
						}
					}
				}
			}
		}
		}
	}
	
	
	
	
	
	
//--------------------------------------------------------------------//

?>


<html>
<body style="background-color:#efeff5";>
<head>
<link rel="stylesheet" type="text/css" href="style/reg2.css">

</head>
<div class="formular"> 
<form method=post>

	 <label><h4><p style=text-align:center><b>Username</b></p></h4></label>
	<input type=text name = "user"><br/><br/>
	 <label><h4><p style=text-align:center><b>Password</b></p></h4></label>
	<input type=password name = "password"></br></br>
	
	 <label><h4><p style=text-align:center><b>Cod inregistrare</b></p></h4></label>
	<input type=text name = "cod"></br></br>
	
	
	
	<button type=submit name=submit>Register</button>




</form>

<a href="home.php"><button type="submit" >Inapoi la pagina de start!</button></a>

</div>
</body>
</html>
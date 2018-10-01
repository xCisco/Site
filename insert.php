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

			
			



//------------------------------VERIFICARE CONEXIUNE----------------------------------

		if(!$connection){
			die("Nu s-a putut conecta la baza de date!");
		}
//------------------------------------------------------------------------------------		
		else
		
	
	

	
		{


//--------------------------------------FCT DE INSERARE-------------------------------			
			if(isset($_POST['submit'])){
				
				$nume = $_POST["nume"];
				$prenume = $_POST["prenume"];
				$an = $_POST["an"];
				$faculta = $_POST["faculta"];
				$spec = $_POST["spec"];
				$matricol = $_POST["matricol"];
				$admin = $_POST['admin'];
				
				if($admin == "yes"){
					$cod = "administrator";
				}else{
					$cod = $faculta."_".$spec."_".$matricol;
				}
			
				
			
				$sql = "insert into nokia.general (nume, prenume, an, facultate, specializare, nr_mat, cod) values ('$nume', '$prenume' , '$an', '$faculta', '$spec','$matricol', '$cod')";
			
				
			
				$query = mysql_query($sql);

				echo "<font color='green'>Inserarea a reusit!!</font>";


			}
//--------------------------------------------------------------------------------------



		}












?>
<html>
<head><link rel="stylesheet" type="text/css" href="style/insert.css"></head>


<body style="background-color:#efeff5";>

<div class="formular">

<form method=POST>

	<label><h3><p style=text-align:center><b>Nume:</b></p></h3></label>
	<input type=text name="nume" placeholder="Introdu numele"><br/><br/>
	<label><h3><p style=text-align:center><b>Prenume:</b></p></h3></label>
	<input type=text name="prenume" placeholder="Introdu prenumele"><br/><br/>
	<label><h3><p style=text-align:center><b>Anul:</b></p></h3></label>
	<select name="an">
			<option value="1">Anul I</option>
			<option value="2">Anul II</option>
			<option value="3">Anul III</option>	
	</select><br/><br/>
	
	<label><h3><p style=text-align:center><b>Facultatea:</b></p></h3></label>
	<input type=text name="faculta" placeholder="Introdu facultatea"><br/><br/>
	<label><h3><p style=text-align:center><b>Specializarea:</b></p></h3></label>
	<input type=text name="spec" placeholder="Introdu Specializarea"><br/><br/>
	<label><h3><p style=text-align:center><b>Numarul matricol:</b></p></h3></label>
	<input type=text name="matricol" placeholder="Introdu numarul matricol"><br/><br/>
	
	
	
	<label><h3><p style=text-align:center><b>Admin</b></p></h3></label>
	<input type=checkbox name="admin" value = "yes" style="width:25px; height:25px;position:absolute;align=center;margin-left:20%;margin-top:-3%;"> 
	
	<button value="submit" name="submit">Inserare</button>
	











</form>


<a href="dashboard.php"><button value="submit" >Inapoi la dashboard</button></a>

</div>








</body>
</html>
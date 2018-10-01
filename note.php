<?php


//------------------------CONEXIUNE BAZA DE DATE--------------------//  
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "nokia";
   $connect = mysql_connect($host,$user,$pass,$db);

//------------------------------------------------------------------//  


session_start();
error_reporting(0);

	$admin = "select * from nokia.conturi c where c.cod = 'administrator' ";
		$result1 = mysql_query($admin);
		
			while($row1 = mysql_fetch_assoc($result1)){
				
				$temp = $row1['cod'];
				
				
				
				
			}
			
	if($_SESSION['code'] != $temp){
		
		header('Location:situatie.php');
		
	}		




		if(isset($_POST['submit'])){
			
			
			$student = $_POST['student'];
			$materie = $_POST['materie'];
			$nota = $_POST['nota'];
			$sem = $_POST['sem'];
			$an = $_POST['an'];
			
			
			
			
			
			
			
			
			
				if($student && $materie && $nota && $sem && $an){
			
					$insert = "INSERT INTO nokia.note(cod_student,materie,nota,sem,an) VALUES ('$student','$materie','$nota','$sem','$an')";
					$sql2 = mysql_query($insert);
					echo "<font color='green'>Inserarea a reusit</font>";
				
				}else{
					echo "<font color='red'>Nu ai conpletat campurile necesare</font>";
				}
			
			
			
			
			
			
			
			
			
		}



























?>

<html>

<head><link rel="stylesheet" type="text/css" href="style/note.css"></head>
<body style="background-color:#efeff5";>

<div class="formular">

<form method=post>

	<label><h3><p style=text-align:center><b>Introdu codul studentului:</b></p></h3></label>
	<input type=text name=student><br/><br/>
	
	<label><h3><p style=text-align:center><b>Introdu materia:</b></p></h3></label>
	<input type=text name=materie><br/><br/>
	
	<label><h3><p style=text-align:center><b>Introdu nota:</b></p></h3></label>
	<input type=text name=nota><br/><br/>
	<label><h3><p style=text-align:center><b>Selecteaza semestrul aferent materiei:</b></p></h3></label>
	<select name=sem>
		<option value="1">1</option>
		<option value="2">2</option>
	
	
	
	</select>
	<br/><br/>
	<label><h3><p style=text-align:center><b>Selecteaza anul aferent materiei</b></p></h3></label>
	<select name=an>
	
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	
	
	
	
	
	</select>
	<br/><br/>

	<button type=submit name="submit">Inserare</button>



	




</form>

<a href="dashboard.php"><button value="submit" >Inapoi la dashboard</button></a>
</div>
</body>
</html>
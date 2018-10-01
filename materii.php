<?php


//-----------------------------------CONEXIUNE BAZA DE DATE--------------------------
	$host = "localhost";
	$username = "root";
	$db = "nokia";
	
	$connection = mysql_connect($host,$username,"",$db);
//-----------------------------------------------------------------------------------

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
		
		
		$materie = $_POST['materie'];
		$spec = $_POST['spec'];
		$an = $_POST['an'];
		$sem = $_POST['sem'];
		$credit = $_POST['credit'];
		$codm = $_POST['codm'];
		
		
		
		if($materie && $spec && $an && $sem && $credit){
			
		$sql = "INSERT INTO nokia.materii(nume_materie,specializare,an,sem,credite) VALUES ('$materie','$spec','$an','$sem','$credit')";
		
		$result = mysql_query($sql);
		
		echo "<font color='green'>Inserarea a reusit</font>";
		}else{
			
			echo "<font color='red'>Nu ai completat campurile necesare</font>";
			
		}
		
		
	}













?>



<html>

<head><link rel="stylesheet" type="text/css" href="style/materii.css"></head>
<body style="background-color:#efeff5";>


<div class="formular"> 


<form method=post>



	<label><h3><p style=text-align:center><b>Numele materiei</b></p></h3></label>
	<input type=text name="materie" placeholder="Introdu numele materiei"><br/><br/>
	
	<label><h3><p style=text-align:center><b>Specializarea aferenta materiei</b></p></h3></label>
	<input type=text name="spec" placeholder="Introdu specializarea de care apartine materia"><br/><br/>
	
	<label><h3><p style=text-align:center><b>Anul</b></p></h3></label>
	<select name="an">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	
	</select>
	<br/><br>
	
	<label><h3><p style=text-align:center><b>Semestrul</b></p></h3></label>
	<select name="sem">
		<option value="1">1</option>
		<option value="2">2</option>
	
	</select>
	
	<br/><br/>
	
	
	<label><h3><p style=text-align:center><b>Numarul de credite aferente materiei</b></p></h3></label>
	<select  name="credit" >
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="5">6</option>
	
	
	
	</select>
	<br/><br/>
	
	<label><h3><p style=text-align:center><b>Codul materiei</b></p></h3></label>
	<input type=text name="codm" placeholder="Introdu codul materiei"><br/><br/>
	
	<button type=submit name=submit>Insereaza</button>








</form>

<a href="dashboard.php"><button value="submit" >Inapoi la dashboard</button></a>

</div>

</body>
</html>
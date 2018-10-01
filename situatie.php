<?php
session_start();


//------------------------CONEXIUNE BAZA DE DATE--------------------//  
   $host = "localhost";
   $user = "root";
   $pass = "";
   $db = "nokia";
   $connect = mysql_connect($host,$user,$pass,$db);

//------------------------------------------------------------------//  

	

		
		
		
		
			
			
			
		$profil = "SELECT nume,prenume from nokia.general where cod = '".$_SESSION['code']."'";
			global $req;
			$req = mysql_query($profil);
			
			
			$chk1 = "SELECT id from nokia.general g where g.id = '".$_SESSION['code']."'";
			$sql = mysql_query($chk1);
			$count = mysql_num_rows($sql);
			
		
				while($row1 = mysql_fetch_assoc($req)){
			global $name;
			$name= $row1['nume']." ".$row1['prenume']."<br/><br/>";
		}	
		
		if(isset($_SESSION['code'])){
			
			
			
			
			$sql1= "select distinct n.* from nokia.general g, nokia.note n,nokia.conturi c where  n.cod_student = '".$_SESSION['code']."'";
			$result = mysql_query($sql1);
			
			
		
		
			echo "<p style='position:absolute; align:right; margin-left:50px; margin-top:100px; color:white; font-weight:bold; font-size:35px'>Buna ziua, $name </p><br/><br/><br/>";
	
			echo "<table width='1250' align=center style='margin-top:100px;position:relative;'>
				
				<tr>
					<th height=30px width=500px>Nume Materie</th>
					<th height=30px width=250px>Nota</th>
					<th height=30px width=250px>Sem</th>
					<th height=30px width=250px>An</th>
				</tr>
				
				
				";
				
				
				
			
			while ($row = mysql_fetch_array($result) ) {
				
				
				
				echo "
				<table  height='60' width='1250' align=center >
				
				<tr>
					<td height=30px width=500px>";

					echo $row['materie'];
					
					echo "</td>
					<td height=30px width=250px>"; 
					
					echo $row['nota'] ;
					echo  "</td>
					<td height=30px width=250px>"; 
					
					echo $row['sem'] ;
					echo "</td>
					<td height=30px width=250px>"; 
					
					echo $row['an'] ;
					echo "</td>
					
				</tr>
				
				
				
				";
				echo "</table>";
			
			
			
			
			
			
		}	
		
		}
		
		
		
			
			
			
			
?>		


<html>

<head><link rel="stylesheet" type="text/css" href="style/situatie.css"></head>


<body>

<div align=right>




<a href=logout.php><button>Log Out</button></a>



</div>








</body>



</html>

				



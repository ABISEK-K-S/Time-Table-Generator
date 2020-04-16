<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="main_files/atm.css">
<link rel="stylesheet" href="main_files/css.css">
<link href="https://fonts.googleapis.com/css?family=Satisfy|Prompt|Ubuntu" rel="stylesheet">
<style type="text/css">
table {
  
  color: white;
  border-collapse: collapse;
  width: 60%;
  
      }

td, th {
  border: 1px dotted #0000e1;
  text-align: center;
  padding: 8px;
       }

tr:nth-child(odd) 
{
  background-color: #f24e76;
}
</style>
</head>
<body>
<br>

<center><h2 style="color: white">Student Time Table</h2>
<h2 style="color: red">(Batch 1)</h2><br><br>
<form name="transfer" method="get">
<table border=2px style="font-family: 'Prompt', cursive; ">
	<tr >
		             <br>
		             
		             <th>Period 1</th>
		             <th>Period 2</th>
		             <th>Period 3</th>
		             <th>Period 4</th>
		             <th>Period 5</th>
		             <th>Period 6</th>
		             

		       </tr>	
		       
<?php
$servername="localhost";
$username="root";
$password="";
$db="timetable";
$conn = new mysqli($servername, $username, $password, $db);
//going to display in time table
$retrive="select * from firstbatchone";
$result = $conn->query($retrive);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$english=$row["english"];
    	$phy=$row["physics"];
    	$chem=$row["chemistry"];
    	$maths=$row["maths"];
    	$cp=$row["cp"];
    	$eg=$row["eg"];
?>	   
<tr style="height: 15px">

<td>
<?php
 echo  $english;
?></td>

  <td><?php
 echo  $phy;
?></td>
		       		  <td><?php
 echo  $chem;
?></td>
		       		  <td><?php
 echo  $maths;
?></td>
		       		  <td><?php
 echo  $cp;
?></td>
		       		  <td><?php
 echo  $eg;
?></td>
		       </tr>
<?php
}
}?>
		</table></form>
		

		<br><br>
		
      
</center>              
</body>
</html>
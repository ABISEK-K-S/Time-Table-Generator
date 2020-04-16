<!DOCTYPE HTML>
<html>

 <?php
$servername="localhost";
$username="root";
$password="";
$db="timetable";
$conn = new mysqli($servername, $username, $password, $db);


//first year
//b1
$m1=$_POST['1yb1s1'];
$m2=$_POST['1yb1s2'];
$m3=$_POST['1yb1s3'];
$m4=$_POST['1yb1s4'];
$m5=$_POST['1yb1s5'];
$m6=$_POST['1yb1s6'];
//b2
$y1b2s1=$_POST['1yb2s1'];
$y1b2s2=$_POST['1yb2s2'];
$y1b2s3=$_POST['1yb2s3'];
$y1b2s4=$_POST['1yb2s4'];
$y1b2s5=$_POST['1yb2s5'];
$y1b2s6=$_POST['1yb2s6'];

//second year
//b1
$y2b1s1=$_POST['2yb1s1'];
$y2b1s2=$_POST['2yb1s2'];
$y2b1s3=$_POST['2yb1s3'];
$y2b1s4=$_POST['2yb1s4'];
$y2b1s5=$_POST['2yb1s5'];
$y2b1s6=$_POST['2yb1s6'];
//b2
$y2b2s1=$_POST['2yb2s1'];
$y2b2s2=$_POST['2yb2s2'];
$y2b2s3=$_POST['2yb2s3'];
$y2b2s4=$_POST['2yb2s4'];
$y2b2s5=$_POST['2yb2s5'];
$y2b2s6=$_POST['2yb2s6'];


//third year
//b1
$y3b1s1=$_POST['3yb1s1'];
$y3b1s2=$_POST['3yb1s2'];
$y3b1s3=$_POST['3yb1s3'];
$y3b1s4=$_POST['3yb1s4'];
$y3b1s5=$_POST['3yb1s5'];
$y3b1s6=$_POST['3yb1s6'];
//b2
$y3b2s1=$_POST['3yb2s1'];
$y3b2s2=$_POST['3yb2s2'];
$y3b2s3=$_POST['3yb2s3'];
$y3b2s4=$_POST['3yb2s4'];
$y3b2s5=$_POST['3yb2s5'];
$y3b2s6=$_POST['3yb2s6'];

//final year
//b1
$y4b1s1=$_POST['4yb1s1'];
$y4b1s2=$_POST['4yb1s2'];
$y4b1s3=$_POST['4yb1s3'];
//b2
$y4b2s1=$_POST['4yb2s1'];
$y4b2s2=$_POST['4yb2s2'];
$y4b2s3=$_POST['4yb2s3'];





$sql11 = "insert into firstbatchone VALUES('$m1','$m2','$m3','$m4','$m5','$m6')";
$sql12 = "insert into firstbatchtwo VALUES('$y1b2s1','$y1b2s2','$y1b2s3','$y1b2s4','$y1b2s5','$y1b2s6')";

$sql21 = "insert into secondbatchone VALUES('$y2b1s1','$y2b1s2','$y2b1s3','$y2b1s4','$y2b1s5','$y2b1s6')";
$sql22 = "insert into secondbatchtwo VALUES('$y2b2s1','$y2b2s2','$y2b2s3','$y2b2s4','$y2b2s5','$y2b2s6')";

$sql31 = "insert into thirdbatchone VALUES('$y3b1s1','$y3b1s2','$y3b1s3','$y3b1s4','$y3b1s5','$y3b1s6')";
$sql32 = "insert into thirdbatchtwo VALUES('$y3b2s1','$y3b2s2','$y3b2s3','$y3b2s4','$y3b2s5','$y3b2s6')";

$sql41 = "insert into fourthbatchone VALUES('$y4b2s1','$y4b2s2','$y4b2s3')";
$sql42 = "insert into fourthbatchtwo VALUES('$y4b2s1','$y4b2s2','$y4b2s3')";


       
if (($conn->query($sql11)==TRUE)&&($conn->query($sql12)==TRUE)&&($conn->query($sql21)==TRUE)&&($conn->query($sql22)==TRUE)&&($conn->query($sql31)==TRUE)&&($conn->query($sql32)==TRUE)&&($conn->query($sql41)==TRUE)&&($conn->query($sql42)==TRUE))
{
echo '<script type="text/javascript">
           window.location = "teacher.html"
      </script>';
      echo $gt;
} 
    else
{
    echo "  user not available";
}


//going to display in time table
$retrive="select * from firstbatchone";
$result = $conn->query($retrive);



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "m1 " . $row["english"]. " m2 " . $row["cp"]. " m3" . $row["eg"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>
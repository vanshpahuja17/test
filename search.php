<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$aadhar = $_POST['aadhar'];  

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT aadhar,name,dob,weight,height,place,gender,doh,dor,complication,tob,birthweight,breastfeeding,hrn FROM childinfo WHERE aadhar = '$aadhar' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // $sql="Select * from users1 where aadhar='$_POST[aadhar]'"
    //echo " - Name: " . $row["name"]. " " . $row["dob"]. "<br>";
    echo"<table  border = '1' align='center'>";
    echo"<b><h1 align=center><u>Healthy Kids Repository - India</u></h1></b>";
    echo"<b><h2 align=center>Child's Information</h2 ></b>";
    echo "<br>  ";
    
    echo "<tr><td>Child's Full Name: </td><td>"  .$row["name"] ;
    echo"</td></tr>";
    echo "<tr><td>Aadhar Number : </td><td>" .$row["aadhar"] ;
        echo"</td></tr>";
    echo "<tr><td>Date of birth : </td><td>" .$row["dob"] ;
        echo"</td></tr>";
    echo "<tr><td>Weight : </td><td>" .$row["weight"];
        echo"</td></tr>";
    echo "<tr><td>Height : </td><td>" .$row["height"];
        echo"</td></tr>";
    echo "<tr><td>Place : </td><td>" .$row["place"];
        echo"</td></tr>";
    echo "<tr><td>Gender : </td><td>" .$row["gender"];
        echo"</td></tr>";
    echo "<tr><td>Date Of Hosptalization : </td><td>" .$row["doh"];
        echo"</td></tr>";
    echo "<tr><td>Date Of Release : </td><td>" .$row["dor"];
        echo"</td></tr>";
    echo "<tr><td>Complication : </td><td>" .$row["complication"];
        echo"</td></tr>";
    echo "<tr><td>Time OF Birth : </td><td>" .$row["tob"];
        echo"</td></tr>";
    echo "<tr><td>Birth Weight : </td><td>" .$row["birthweight"];
        echo"</td></tr>";
        echo"</td></tr>";
    echo "<tr><td>Hospital Registration Number : </td><td>" .$row["hrn"];
        echo"</td></tr>";
        echo"</table>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                 body {
                  background-image: linear-gradient(120deg, #FFEEEE 50%, #FFE3E3 50%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
}


</style>
</head>
<body>
  <!-- <a href="index.html"><button align=center>Back To Home Page</button></a> -->
  <div id="bg">
  <!-- <img src="child.jpeg" width=650px height=650px> -->
  <!-- <a href="doctorproject1.php"><span style="padding-left:40vw"><button align=center>Back To Main Page</button></a> -->
  
</div>
</body>
</html>
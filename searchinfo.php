<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,dob,weight,height,place,gender,doh,dor,complication,tob,birthweight,breastfeeding,hrn FROM childinfo ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // $sql="Select * from users1 where aadhar='$_POST[aadhar]'"
    //echo " - Name: " . $row["name"]. " " . $row["dob"]. "<br>";
    
    echo "Childs Full Name : "  .$row["name"];
    echo"<br><br>";
    echo "Date of birth :" .$row["dob"];
    echo"<br><br>";
    echo "Weight : " .$row["weight"];
    echo"<br><br>";
    echo "Height : " .$row["height"];
    echo"<br><br>";
    echo "Place : " .$row["place"];
    echo"<br><br>";
    echo "Gender : " .$row["gender"];
    echo"<br><br>";
    echo "Date Of Hosptalization : " .$row["doh"];
    echo"<br><br>";
    echo "Date Of Release : " .$row["dor"];
    echo"<br><br>";
    echo "Complication : " .$row["complication"];
    echo"<br><br>";
    echo "Time OF Birth : " .$row["tob"];
    echo"<br><br>";
    echo "Birth Weight : " .$row["birthweight"];
    echo"<br><br>";
    echo "Breastfeeding : " .$row["breastfeeding"];
    echo"<br><br>";
    echo "Hospital Registration Number : " .$row["hrn"];
    echo"<br><br>";
    echo"<br>";
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
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
}


</style>
</head>
<body>
  <!-- <a href="main.php"><button align=center>Back To Home Page</button></a> -->
  <div id="bg">
  <!-- <img src="child.jpeg" width=650px height=650px> -->
  
</div>
</body>
</html>
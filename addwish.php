<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="book_my_book";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$wisher_name = $demand_name = $demand_desc = $wisher_no = $wisher_location ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $wisher_name = test_input($_POST["wishername"]);
  $demand_name = test_input($_POST["demandbook"]);
  
  $demand_desc = test_input($_POST["demanddesc"]);
  $wisher_no = test_input($_POST["wishernumber"]);
  $wisher_location = test_input($POST["wisherlocation"]);

  $wisher_name= $_POST["wishername"];
  $demand_name= $_POST["demandbook"];
  $demand_desc=$_POST["demanddesc"];
  $wisher_no= $_POST["wishernumber"];
  $wisher_location= $_POST["wisherlocation"];

  
  $sql="insert into bookdemand(wisher_name,demand_name,demand_desc,wisher_no,wisher_location) values('$wisher_name','$demand_name','$demand_desc','$wisher_no','$wisher_location')";
  $result=mysqli_query($conn,$sql);
  header('location:wishlist.php');

  }
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname='book_my_book';

// Create connection

$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$username = $email = $password = $phonenumber = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    echo "Name is required";
  } else {
    $user_name = test_input($_POST["username"]);
  }

  if (empty($_POST["email"])) {
    echo "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    echo "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["phonenumber"])) {
    echo "Enter Phone Number";
  } else {
    $phone_no = test_input($_POST["phonenumber"]);
  }

  $sql="insert into userdetails(user_name,phone_no,email,password) values('$user_name','$phone_no','$email','$password')";
  $result=mysqli_query($conn,$sql);
  header('location:index.php'); 
}
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
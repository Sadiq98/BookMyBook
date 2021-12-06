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

$book_name = $seller_name= $mrp = $book_condition = $resale_value = $description= $location =$category= $user_phone= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $book_name = test_input($_POST["bookname"]);
  $seller_name=test_input($_POST["sellername"]);
  $mrp = test_input($_POST["mrp"]);
  $book_condition= test_input($_POST["condition"]);
  $user_phone= test_input($_POST["userphone"]);

  if ($book_condition=="average"){
   $resale_value=$mrp-($mrp*(30/100));
  }
  elseif ($book_condition=="good") {
  	$resale_value=$mrp-($mrp*(40/100));
  }
  else{
  	$resale_value=$mrp-($mrp*(50/100));
  }

  
 
  $description=$_POST["description"];
  $category=$_POST["category"];
  $location=$_POST["location"];
  
  $sql="insert into books(book_name,seller_name,category,mrp,resale_value,book_condition,description,location,user_phone) values('$book_name','$seller_name','$category','$mrp','$resale_value','$book_condition','$description','$location','$user_phone'"."'".$_SESSION['login_user']."')";
  $result=mysqli_query($conn,$sql);
  header('location:buy.php');

  }
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


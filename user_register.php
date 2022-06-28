<?php


$servername = "localhost";
$username = "root";
$password = "";
$db="hospital book";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// $q="INSERT INTO `user`(`id`, `gmail`, `password`) VALUES ('','nnn','890')";

// $result= mysqli_query($conn,$q);


// $q="SELECT * FROM `user` WHERE gmail='$email' AND password='$password'";
$name=$_POST['Name'];
$mobile=$_POST['mobile-number'];
$email=$_POST['email'];
$password=$_POST['password'];


// $email = stripcslashes($email);
// $password = stripcslashes($password);
// $username = mysqli_real_escape_string($conn, $email);
// $password = mysqli_real_escape_string($conn, $password);


$sql = "INSERT INTO register (name, mobile, email, password) VALUES ('$name', '$mobile', '$email', '$password')";
$result = mysqli_query($conn, $sql);
$q="INSERT INTO user (gmail, password) VALUES ('$email', '$password')";
$r=mysqli_query($conn, $q);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// $count = mysqli_num_rows($result);

if($result){
    header("location:http://localhost/hospital%20book/hosp22.php");
  }
  else{
  header("location:http://localhost/hospital%20book/");
    // echo "<h1> Login failed. Invalid username or password.</h1>";
}

<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "hospital book";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  // die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";





  $name = $_POST['name'];
  $addr = $_POST['address'];
  $mobil = $_POST['conta'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $speciality = $_POST['Speciality'];







  $lice = $_POST['lice'];
  $sql = "select * from hospno where lisc = '$lice'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

  if ($count == 1) {

    echo "<h1>HOSPITAL ADDED SUCCESSFULLY<\h1>";


      $q = "INSERT INTO hospitals (name,address, mobile, email, password,speciality) VALUES ('$name', '$addr','$mobil', '$email', '$password','$speciality')";
      $res = mysqli_query($conn, $q);

} else {
  echo "<h1>invalid license<\h1>";

}

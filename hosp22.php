



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <title>Document</title>
    <style>
   .imagee{
    width:100%;
    position: absolute;
    z-index: -1;
    opacity: 0.7;
   }

table, th, td {
    border: 3px outset;
    margin: 5%;
    padding: auto;

}
</style>
  </head>
  <body>

  <img class="imagee" src="image3.jpg" >


    <header class="text-gray-600 body-font">
      <div
        class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
      >
        <a
          class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            stroke="currentColor"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full"
            viewBox="0 0 24 24"
          >
            <path
              d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
            ></path>
          </svg>
          <span class="ml-3 text-xl">BookEasy</span>
        </a>
        <nav
          class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-base justify-center"
        >
          <a class="mr-5 hover:text-gray-850" onclick="index()">Home</a>
          <!-- <a class="mr-5 hover:text-gray-850">services</a>
          <a class="mr-5 hover:text-gray-850">contact</a> -->
          <a class="mr-5 hover:text-gray-850"onclick="about()">about</a>
        </nav>
      </div>
    </header>

    <?php


$servername = "localhost";
$username = "root";
$password = "";
$db="hospital book";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  // die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";



$sql = "SELECT name, speciality, address, mobile FROM hospitals";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  echo "<table><tr><th>Hospital Name</th><th>Speciality</th><th>Address</th><th>Contact no.</th><th>Appoint</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    // echo "<tr><td>" . $row["id"]."</td><td>" .$row["name"]."</td><td>". $row["email"]."</td><button type='button' class='btn btn-primary'>click here</button></a><td>"."</td><tr>" ;
    // $table.="<tr>";
    // "<td>$row['id']</td>";
    // // $table.="<td><img src='uploads/$row[1]' width='100px' height='100px' style='border:1px solid #333333;'></td>";
    // $table.="<td>$row[2]</td>";
    //  $table.="<td>$row[4]</td>";
    // //  $table.="<td>$row[6]</td>";
    // //  $table.="<td>$row[7]</td>";
    //  $table.="<td><a href='requestbook.php?bookid=$row[0]&userid=$userloginid'><button type='button' class='btn btn-primary'>Request Book</button></a></td>";
    // ?bookid=$row[0]&userid=$userloginid
    //  $table.="</tr>";
    echo "<tr>";

    echo "<td>" . $row['name'] . "</td>";

    echo "<td>" . $row['speciality'] . "</td>";


    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['mobile'] . "</td>";
    // $x=$row['name'];
    echo "<td><a href='appoint.html'><button type='button' class='btn btn-primary'>click here</button></a></td>";

    echo "</tr>";


  }
  echo "</table>";
} else {
  echo "0 results";
}


?>

<script>
   function index() {
                window.location = "index.html";
            }
            function about() {
            window.location = "about.html";
        }
</script>


  </body>
</html>


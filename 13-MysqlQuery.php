<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "bossROD";
$port = 3307;

$connection = mysqli_connect($host, $user, $password, $database, $port);

$queryRead = "SELECT * FROM users";
$sqlRead = mysqli_query($connection, $queryRead);

// if (mysqli_num_rows($sql) > 0) {
//   for ($r = 1; $r <= mysqli_num_rows($sql); $r++) {
//     $results = mysqli_fetch_array($sql);
  
//     echo "Name: ".$results["name"]."<br>";
//     echo "Age: ".$results["age"]."<br>";
//   }
// } else {
//   echo "No records found!";
// }

// if (mysqli_num_rows($sql) > 0) {
//   while ($results = mysqli_fetch_array($sql)) {
//     echo "Name: ".$results["name"]."<br>";
//     echo "Age: ".$results["age"]."<br>";
//   }
// } else {
//   echo "No records found!";
// }

?>
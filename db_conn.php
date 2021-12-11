<?php
// //Database connection paramaters
$servername = "localhost";  // servername
$username = "root"; // For MYSQL the predifined username is root
$password = "Br1g7ht.@pp"; // For MYSQL the predifined password is " "(blank)

$dbname="goldencresentfx";    //database


define("SNAME","localhost");
define("UNAME","root");
define("PASSWORD","");
define("DATABASE","goldencresentfx");

// /* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
 $conn = mysqli_connect("localhost", "root", "Br1g7ht.@pp", "goldencresentfx");
 
// // Check connection
 if ($conn->connect_error) {

     die("Connection failed: " . $conn->connect_error);
 }

 echo "Database Connected successfully ";
// echo "                              ";

?>
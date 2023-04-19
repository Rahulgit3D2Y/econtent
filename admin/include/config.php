

<?php
/*
$servername = "localhost";
$database = "u966249412_Testing";
$username = "u966249412_Testing";
$password = "u966249412@Testing";
 
 */
$servername = "localhost";
$database = "econtent";
$username = "root";
$password = "";

// Create connection
 
$con = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$con) {
    
    die("Connection failed: " . mysqli_connect_error());
}

?>